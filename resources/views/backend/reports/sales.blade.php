@extends('backend.layouts.master')
@section('title', 'Sales Report')
@section('page-header')
    <i class="fa fa-list"></i> Sales Report
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
          style="width: 70%; margin: auto">
        <table class="table table-bordered">
            <tr>
                <th class="bg-dark" style="width: 16%"><label for="order">Order</label></th>
                <th class="bg-dark" style="width: 16%"><label for="from_date">From Date</label></th>
                <th class="bg-dark" style="width: 16%"><label for="to_date">To Date</label></th>
                <th class="bg-dark" style="width: 10%"><label for="">Action</label></th>
            </tr>
            <tr>
                <td>
                    <select class="chosen-select" id="order" name="order" data-placeholder="- Order -">
                        <option value=""></option>
                        @foreach($all_orders as $order)
                            <option value="{{$order->id}}" {{$order->id == request()->query('order') ? 'selected':''}}>
                                {{$order->no}}
                            </option>
                        @endforeach
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

    <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th class="bg-dark" style="width: 4%">SL</th>
                <th class="bg-dark" style="width: 13.71%">Order No</th>
                <th class="bg-dark" style="width: 13.71%">Delivery Date</th>
                <th class="bg-dark" style="width: 13.71%">Total</th>
                <th class="bg-dark" style="width: 13.71%">Subtotal</th>
                <th class="bg-dark" style="width: 13.71%">Commission</th>
                <th class="bg-dark" style="width: 13.71%">Vat</th>
            </tr>
            @forelse($orders as $key => $order)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $order->no }}</td>
                    <td>{{ \Carbon\Carbon::parse($order->delivery_date)->format('Y-m-d') }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->subtotal }}</td>
                    <td>{{ $order->commission }}</td>
                    <td>{{ $order->vat }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No data available in table</td>
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
