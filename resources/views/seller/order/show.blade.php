@extends('seller.layouts.master')
@section('title','Show Order')
@section('page-header')
    <i class="fa fa-list"></i> Show Order
@stop

@push('css')
    <style>
        table th, table td {
            text-align: center !important;
            vertical-align: middle !important;
        }

        .maximize {
            margin-top: -13px;
            margin-bottom: -12px;
            position: relative;
        }

        .maximize table {
            margin-bottom: 0;
        }

        .widget-box {
            margin-bottom: 20px;
            box-shadow: 0 0 4px #d7d7d7;
            border: none;
        }

        .widget-header {
            font-size: 14px;
            border-bottom: 1px solid #eee;
            /* background: #5877b8; */
            background: #8e8f92bf;
        }

        .widget-title {
            color: white;
        }

        .widget-toolbar > .nav-tabs > li:not(.active) > a {
            color: white;
        }

        label {
            color: #5c5c5c;
        }
    </style>
@endpush

@section('content')
    @include('seller.components.page_header', [
       'fa' => 'fa fa-list',
       'name' => 'Pending List',
       'route' => route('seller.order.pending.index')
    ])
    <!-- Summary -->
    <div class="widget-box" id="summary" style="width: 30%; margin-left: auto">
        <div class="widget-header widget-header-blue widget-header-flat">
            <h4 class="widget-title">Summary</h4>
            <div class="widget-toolbar">
                <a href="#" data-action="collapse" class="white">
                    <i class="ace-icon fa fa-chevron-up"></i>
                </a>
            </div>
        </div>

        <div class="widget-body">
            <div class="widget-main" style="margin-bottom: 20px">
                <div class="row" style="display: flex; justify-content: center">
                    <div class="col-md-12">
                        <div style="display: flex; justify-content: center; margin-bottom: 10px;">
                            <span>Order No:</span>
                            <span class="stat-subtotal">&emsp;{{$detail->order->no}}</span>
                        </div>
                        <div style="display: flex; justify-content: space-between">
                            <span>Total:</span>
                            <span class="stat-total">{{round($detail->total)}} TK</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Items -->
    <div class="widget-box" id="items">
        <div class="widget-header widget-header-blue widget-header-flat">
            <h4 class="widget-title">Items</h4>
            <div class="widget-toolbar">
                <a href="#" data-action="collapse" class="white">
                    <i class="ace-icon fa fa-chevron-up"></i>
                </a>
            </div>
        </div>

        <div class="widget-body">
            <div class="widget-main">
                <div class="row">
                    <div class="maximize">
                        <table class="table table-bordered text-center" id="items-table">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Item</th>
                                <th>Variant</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Sub Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $sub = 0;
                            @endphp
                            @foreach($detail->items as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td style="max-width: 200px">
                                        {{$item->product->name}}
                                    </td>
                                    <td>
                                        @if($item->variant->color && $item->variant->size)
                                            {{$item->variant->color->name . ' - ' . $item->variant->size->name}}
                                        @elseif($item->variant->color)
                                            {{$item->variant->color->name}}
                                        @elseif($item->variant->size)
                                            {{$item->variant->size->name}}
                                        @else
                                            Default
                                        @endif
                                    </td>
                                    <td class="small-input">
                                        {{round($item->qty)}}
                                    </td>
                                    <td class="small-input">
                                        {{round($item->price)}}
                                    </td>
                                    <td>
                                        <span class="subtotal">{{round($item->subtotal)}}</span>
                                        @php
                                            $sub += round($item->subtotal);
                                        @endphp
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="5">
                                </td>
                                <td class="total">{{$sub}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
