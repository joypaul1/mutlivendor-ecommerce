<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Order;
use App\Seller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        $total_seller           = Seller::count();
        $total_agent            = Agent::count();
        $total_user             = User::count();
        // $seller_due             = Seller::has('transactions')->with('transactions')->get()->pluck('transactions')->collapse()->sum('seller_amount');
        // $agent_due              = Agent::has('transactions')->with('transactions')->get()->pluck('transactions')->collapse()->sum('agent_amount');
        $seller_due =  $agent_due  = 0;
        // $saleReport             = $this->saleReport();
        // $pendingOrder           = $this->pendingOrder($request);
        // $waitingOrder           = $this->waitingOrder($request);
        // $onDeliveryOrder        = $this->onDeliveryOrder($request);
        // $deliveryOrder          = $this->deliveryOrder($request);
        // $notdeliveryOrder       = $this->notdeliveryOrder($request);
        // $canceldeliveryOrder    = $this->canceldeliveryOrder($request);

        return view('backend.dashboard.index', compact(
            // 'saleReport',
            'agent_due',
            'seller_due'
            // 'total_seller',
            // 'total_agent',
            // 'pendingOrder',
            // 'waitingOrder',
            // 'onDeliveryOrder',
            // 'deliveryOrder',
            // 'notdeliveryOrder',
            // 'canceldeliveryOrder'
        ));
    }

    function pendingOrder($request)
    {
        $data           = $this->getCommonFilterData($request, ['cash', 'gateway'], ['Pending']);
        // $data['orders'] = $this->getFilteredOrders($request, ['cash', 'gateway'], ['Pending']);
        foreach ($data as $pending) {
            return $pending->count();
        }
    }
    private  function waitingOrder(Request $request)
    {
        $data = $this->getCommonFilterData($request, null, ['Accepted']);
        // $data['orders'] = $this->getFilteredOrders($request, null, ['Accepted']);
        foreach ($data as $waiting) {
            return $waiting->count();
        }
    }
    private  function onDeliveryOrder(Request $request)
    {
        $data = $this->getCommonFilterData($request, null, ['On Delivery']);
        // $data['orders'] = $this->getFilteredOrders($request, null, ['Accepted']);
        foreach ($data as $delivery) {
            return $delivery->count();
        }
    }

    private  function deliveryOrder(Request $request)
    {
        $data = $this->getCommonFilterData($request, null, ['Delivered']);
        // $data['orders'] = $this->getFilteredOrders($request, null, ['Accepted']);
        foreach ($data as $delivery) {
            return $delivery->count();
        }
    }
    private  function notdeliveryOrder(Request $request)
    {
        $data = $this->getCommonFilterData($request, null, ['Not Delivered']);
        // $data['orders'] = $this->getFilteredOrders($request, null, ['Accepted']);
        foreach ($data as $notdelivery) {
            return $notdelivery->count();
        }
    }

    private  function canceldeliveryOrder(Request $request)
    {
        $data = $this->getCommonFilterData($request, null, ['Cancelled']);
        // $data['orders'] = $this->getFilteredOrders($request, null, ['Accepted']);
        foreach ($data as $notdelivery) {
            return $notdelivery->count();
        }
    }


    function saleReport(){
        $todaySale      = Order::whereDate('order_time', Date('Y-m-d'))->sum('total');
        $yesterdaySale  = Order::whereDate('order_time', Carbon::yesterday()->format('Y-m-d'))->sum('total');
        $monthlySale    = Order::whereMonth('order_time', Carbon::now()->month)->sum('total');

       return ['todaySale' => $todaySale, 'yesterdaySale' => $yesterdaySale, 'monthlySale' => $monthlySale];
    }


    private function getCommonFilterData(Request $request, $types = null, $status = null)
    {
        if (!$types)
            $types = ['cash', 'gateway'];
        if (!$status)
            $status = ['Pending', 'Accepted', 'Cancelled', 'On Delivery', 'Delivered'];

        $res['order_nos'] = Order::whereIn('type', $types)
            ->whereIn('order_status', $status)
            ->select('id', 'no')
            ->get();

        // $res['users'] = User::whereHas('order', function ($q) use ($types, $status) {
        //     $q->whereIn('type', $types)
        //         ->whereIn('order_status', $status)
        //         ->select('id', 'user_id', 'order_status');
        // })
        //     ->select('id', 'name')
        //     ->get();

        // $res['sellers'] = Seller::whereHas('order_details', function ($q) use ($types, $status) {
        //     $q->whereHas('order', function ($r) use ($types, $status) {
        //         $r->whereIn('type', $types)
        //             ->whereIn('order_status', $status)
        //             ->select('id');
        //     })->select('id', 'seller_id');
        // })
        //     ->select('id', 'shop_name')
        //     ->get();

        // if (in_array('On Delivery', $status) || in_array('Delivered', $status)) {
        //     $res['agents'] = Agent::whereHas('orders', function ($q) use ($types, $status) {
        //         $q->whereIn('type', $types)
        //             ->whereIn('order_status', $status)
        //             ->select('id', 'delivery_agent_id');
        //     })
        //         ->select('id', 'name')
        //         ->get();
        // }

        return $res;
    }

    private function getFilteredOrders(Request $request, $types = ['cash', 'gateway'], $status = null)
    {
        if (!$types)
            $types = ['cash', 'gateway'];
        if (!$status)
            $status = ['Pending', 'Accepted', 'Cancelled', 'On Delivery', 'Delivered'];

        return Order
            ::with([
                'user' => function ($q) {
                    $q->select('id', 'name');
                },
                'delivery_agent' => function ($q) {
                    $q->select('id', 'name');
                }
            ])
            ->whereIn('type', $types)
            ->whereIn('order_status', $status)
            ->when($request->order, function ($q) use ($request) {
                $q->where('id', $request->order);
            })
            ->when($request->customer, function ($q) use ($request) {
                $q->where('user_id', $request->customer);
            })
            ->when($request->shop, function ($q) use ($request) {
                $q->whereHas('details', function ($r) use ($request) {
                    $r->where('seller_id', $request->shop);
                });
            })
            ->when($request->total, function ($q) use ($request) {
                $q->where('total', $request->total);
            })
            ->when($request->from_date, function ($q) use ($request) {
                $q->whereDate('order_time', '>=', $request->from_date);
            })
            ->when($request->to_date, function ($q) use ($request) {
                $q->whereDate('order_time', '<=', $request->to_date);
            })
            ->when($request->agent, function ($q) use ($request) {
                $q->where('delivery_agent_id', $request->agent);
            })
            ->select('id', 'user_id', 'delivery_agent_id', 'no', 'order_time', 'total', 'order_status', 'payment_status')
            ->orderBy('order_time', 'desc')
            ->paginate(12);
    }
}
