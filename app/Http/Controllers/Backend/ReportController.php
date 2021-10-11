<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Division;
use App\Models\Order;
use App\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function due_sellers(Request $request)
    {
        $sellers = Seller::select('id', 'name', 'mobile')
            ->when($request->seller, function ($q) use ($request) {
                $q->where('id', $request->seller);
            })
            ->when($request->mobile, function ($q) use ($request) {
                $q->where('mobile', $request->mobile);
            })
            ->withCount(['transactions as amount' => function ($q) {
                $q->select(DB::raw('sum(seller_amount)'));
            }])
            ->having('amount', '>', 0)
            ->paginate(12);

        // Seller::has('transactions')->with('transactions')->get()->pluck('transactions')->collapse()->sum('seller_amount')

        // filters
        $all_sellers = Seller::select('id', 'name', 'shop_name')
            ->withCount(['transactions as amount' => function ($q) {
                $q->select(DB::raw('sum(seller_amount)'));
            }])
            ->having('amount', '>', 0)
            ->get();

        return view('backend.reports.seller_due', compact('sellers', 'all_sellers'));
    }

    public function due_agents(Request $request)
    {
        $agents = Agent::select('id', 'name', 'delivery_id')
            ->with(['delivery' => function ($q) {
                $q->select('id', 'phone');
            }])
            ->when($request->agent, function ($q) use ($request) {
                $q->where('id', $request->agent);
            })
            ->when($request->mobile, function ($q) use ($request) {
                $q->whereHas('delivery', function ($q) use ($request) {
                    $q->where('phone', $request->mobile);
                });
            })
            ->withCount(['transactions as amount' => function ($q) {
                $q->select(DB::raw('sum(agent_amount)'));
            }])
            ->having('amount', '>', 0)
            ->paginate(12);

        // filters
        $all_agents = Agent::select('id', 'name')
            ->withCount(['transactions as amount' => function ($q) {
                $q->select(DB::raw('sum(agent_amount)'));
            }])
            ->having('amount', '>', 0)
            ->get();

        return view('backend.reports.agent_due', compact('agents', 'all_agents'));
    }

    public function sales(Request $request)
    {
        $orders = Order::select('id', 'no', 'total', 'subtotal', 'vat')
            ->when($request->order, function ($q) use ($request) {
                $q->where('id', $request->order);
            })
            ->when($request->from_date, function ($q) use ($request) {
                $q->whereDate('delivery_date', '>=', $request->from_date);
            })
            ->when($request->to_date, function ($q) use ($request) {
                $q->whereDate('delivery_date', '<=', $request->to_date);
            })
            ->with(['details' => function ($q) {
                $q->select('id', 'order_id', 'commission');
            }])
            ->has('transactions')
            ->paginate(12);

        $all_orders = Order::select('id', 'no')->has('transactions')->get();

        $orders->transform(function ($o) {
            $o->commission = 0;
            foreach ($o->details as $detail) {
                $seller_amount = round($detail->total - $detail->commission, 2);
                $total_amount = round($detail->vat + $detail->shipping_charge + $detail->total);
                $o->commission += $total_amount - $seller_amount - $detail->agent_charge - $detail->vat;
            }
            return $o;
        });

        return view('backend.reports.sales', compact('orders', 'all_orders'));
    }

    public function deliveries(Request $request)
    {
        $orders = Order::select('id', 'no', 'delivery_agent_id', 'billing_address_id', 'order_status', 'total', 'agent_charge', 'delivery_date')
            ->where('delivery_agent_id', $request->agent ?? -1)
            ->where('order_status', 'Delivered')
            ->with(['billing_address' => function ($r) {
                $r->select('id', 'division_id', 'city_id', 'post_code_id')
                    ->with('division', 'city', 'area');
            }])
            ->when($request->division, function ($q) use ($request) {
                $q->whereHas('billing_address', function ($r) use ($request) {
                    $r->where('division_id', $request->division)
                        ->when($request->city, function ($s) use ($request) {
                            $s->where('city_id', $request->city);
                        })
                        ->when($request->area, function ($s) use ($request) {
                            $s->where('post_code_id', $request->area);
                        });
                });
            })
            ->when($request->from_date, function ($q) use ($request) {
                $q->whereDate('delivery_date', '>=', $request->from_date);
            })
            ->when($request->to_date, function ($q) use ($request) {
                $q->whereDate('delivery_date', '>=', $request->to_date);
            })
            ->withCount('items as ttl_items')
            ->latest()
            ->paginate(12);

        // filters
        $all_agents = Agent::select('id', 'name')
            ->whereHas('orders', function ($q) {
                $q->where('order_status', 'Delivered');
            })
            ->get();

        $all_divisions = Division::all();

        return view('backend.reports.deliveries', compact('orders', 'all_agents', 'all_divisions'));
    }
}
