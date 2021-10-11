@extends('backend.layouts.master')
@section('title', 'Agent Due Report')
@section('page-header')
    <i class="fa fa-list"></i> Delivery Report
@stop
@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/custom.chosen.min.css')}}">
    <style>
        table th,
        td {
            text-align: center !important;
            vertical-align: middle !important;
        }
    </style>
@endpush

@section('content')
    @include('backend.components.page_header')

    <form class="form-horizontal"
          method="GET"
          role="form"
          action="/{{request()->route()->uri()}}"
          enctype="multipart/form-data"
          style="">
        <table class="table table-bordered">
            <tr>
                <th class="bg-dark" style="width: 15%"><label for="agent">Agent <span style="color: red; font-weight: bold">*</span></label></th>
                <th class="bg-dark" style="width: 15%"><label for="division">Division</label></th>
                <th class="bg-dark" style="width: 15%"><label for="city">City</label></th>
                <th class="bg-dark" style="width: 15%"><label for="area">Area</label></th>
                <th class="bg-dark" style="width: 15%"><label for="from_date">From</label></th>
                <th class="bg-dark" style="width: 15%"><label for="to_date">To</label></th>
                <th class="bg-dark" style="width: 10%"><label for="">Action</label></th>
            </tr>
            <tr>
                <td>
                    <select class="chosen-select" id="agent" name="agent" data-placeholder="- Agent -">
                        <option value=""></option>
                        @foreach($all_agents as $agent)
                            <option value="{{$agent->id}}" {{$agent->id == request()->query('agent') ? 'selected':''}}>
                                {{$agent->name}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select class="chosen-select" id="division" name="division" data-placeholder="- Division -">
                        <option value=""></option>
                        @foreach($all_divisions as $division)
                            <option
                                value="{{$division->id}}" {{$division->id == request()->query('division') ? 'selected':''}}>
                                {{$division->name}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select class="chosen-select" id="city" name="city" data-placeholder="- City -">
                        <option value=""></option>
                    </select>
                </td>
                <td>
                    <select class="chosen-select" id="area" name="area" data-placeholder="- Area -">
                        <option value=""></option>
                    </select>
                </td>
                <td>
                    <input type="text"
                           id="from_date"
                           name="from_date"
                           placeholder="From Date"
                           value="{{request()->query('from_date')}}"
                           class="input-sm form-control text-center datepicker">
                </td>
                <td>
                    <input type="text"
                           id="to_date"
                           name="to_date"
                           placeholder="To Date"
                           value="{{request()->query('to_date')}}"
                           class="input-sm form-control text-center datepicker">
                </td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <button type="submit"
                                class="btn btn-xs btn-primary"
                                title="Search">
                            <i class="ace-icon fa fa-search"></i>
                        </button>

                        <a href="/{{request()->route()->uri()}}"
                           class="btn btn-xs btn-info"
                           title="Show All">
                            <i class="ace-icon fa fa-list"></i>
                        </a>
                    </div>
                </td>
            </tr>
        </table>
    </form>

    @php
        $agent = App\Models\Agent::select('id', 'name', 'delivery_id')
                ->where('id', request()->query('agent') ?? -1)
                ->with(['delivery' => function ($q) {
                    $q->select('id', 'phone');
                }])
                ->withCount(['transactions as ttl_amounts' => function ($q) {
                    $q->select(DB::raw('sum(total_amount)'));
                }])
                ->withCount(['orders as ttl_orders' => function ($q) {
                    $q->where('order_status', 'Delivered');
                }])
                ->withCount(['order_items as ttl_items' => function ($q) {
                    $q->whereHas('order', function ($r) {
                        $r->where('order_status', 'Delivered');
                    });
                }])
                ->first();
    @endphp

    @if($agent)
        <div class="widget-box" id="summary" style="width: 420px; margin: 30px auto 20px auto !important;">
            <div class="widget-header widget-header-flat bg-dark text-center">
                <h4 class="widget-title" style="color:#000;">{{$agent->name}}</h4>
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <div class="row" style="display: flex; justify-content: center">
                        <div class="col-md-12">
                            <div style="display: flex; justify-content: space-between">
                                <span>Total Delivered:</span>
                                <span class="stat-subtotal">{{$agent->ttl_orders}}</span>
                            </div>
                            <div style="display: flex; justify-content: space-between">
                                <span>Delivered Items:</span>
                                <span class="stat-subtotal">{{$agent->ttl_items}}</span>
                            </div>
                            <div style="display: flex; justify-content: space-between">
                                <span>Delivered Amount:</span>
                                <span class="stat-subtotal">{{round($agent->ttl_amounts)}} TK</span>
                            </div>
                            <div style="display: flex; justify-content: space-between">
                                <span>Contact No:</span>
                                <span class="stat-subtotal">{{$agent->delivery->phone}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th class="bg-dark" style="width: 4%">SL</th>
                <th class="bg-dark" style="width: 13.71%">Delivery Date</th>
                <th class="bg-dark" style="width: 13.71%">Order No</th>
                <th class="bg-dark" style="width: 13.71%">Total Amount</th>
                <th class="bg-dark" style="width: 13.71%">Total Items</th>
                <th class="bg-dark" style="width: 13.71%">Agent Charge</th>
            </tr>
            @forelse($orders as $key => $order)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $order->delivery_date }}</td>
                    <td>{{ $order->no }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->ttl_items }}</td>
                    <td>{{ round($order->agent_charge) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No data available in table</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    @include('backend.partials._paginate', ['data' => $orders])
@endsection

@push('js')
    <script type="text/javascript">
        jQuery(function ($) {
            if (!ace.vars['touch']) {
                $('.chosen-select').chosen({allow_single_deselect: true, search_contains: true});
                //resize the chosen on window resize
                $(window).on('resize.chosen', function () {
                    $('.chosen-select').each(function () {
                        let $this = $(this);
                        $this.next().css({'width': '100%'});
                        // $this.next().css({'width': $this.parent().width()});
                    })
                }).trigger('resize.chosen');
            }

            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                todayHighlight: true,
            });

            const division = $('#division');
            const city = $('#city');
            const area = $('#area');

            division.on('change', function () {
                $.get('{{route('backend.order.cities.ajax', 100)}}'.replace(100, $(this).val()), function (res) {
                    if (res.cities) {
                        city.empty();
                        city.append(`<option value=""></option>`);
                        res.cities.forEach(function (c) {
                            city.append(`<option value="${c.id}">${c.name}</option>`);
                        });
                        city.val(null).trigger('chosen:updated');
                    }
                });
            });

            city.on('change', function () {
                $.get('{{route('backend.order.areas.ajax', 100)}}'.replace(100, $(this).val()), function (res) {
                    if (res.areas) {
                        area.empty();
                        area.append(`<option value=""></option>`);
                        res.areas.forEach(function (a) {
                            area.append(`<option value="${a.id}">${a.name}</option>`);
                        });
                        area.trigger('chosen:updated');
                    }
                });
            });
        });

        function delete_check(id) {
            Swal.fire({
                title: 'Are you sure?',
                html: "<b>You will delete it permanently!</b>",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                width: 400,
            }).then((result) => {
                if (result.value) {
                    $('#deleteCheck_' + id).submit();
                }
            })
        }
    </script>
@endpush
