@extends('seller.layouts.master')
@section('title','Pending List')
@section('page-header')
    <i class="fa fa-list"></i> Pending List
@stop

@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/custom.chosen.min.css')}}">
    <style>
        table th,
        td {
            text-align: center !important;
            vertical-align: middle !important;
        }

        input {
            width: 100%;
        }
        .chosen-container.chosen-container-single{
            max-width: 300px;
        }
    </style>
@endpush

@section('content')
    @include('seller.components.page_header')

    @include('seller.order.filter')

    <table class="table table-bordered">
        <tbody>
        <tr>
            <th class="bg-dark" style="">SL</th>
            <th class="bg-dark" style="">Order No.</th>
            <th class="bg-dark" style="">Product Name</th>
            <th class="bg-dark" style="">Quantity</th>
            <th class="bg-dark" style="">Total</th>
            <th class="bg-dark" style="">Order Date</th>
            <th class="bg-dark" style="">Action</th>
        </tr>
        @forelse($details as $key => $detail)
            @php
                $name = '';
                foreach (collect($detail->items) as $key => $item){
                    if ($key == 0)
                        $name .= $item->product->name;
                    else if ($key == 1){
                        $name .= ', ...';
                        break;
                    }
                }
            @endphp
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$detail->order->no}}</td>
                <td style="width:30%; max-width:50%;">
                    {{$name}}
                </td>
                <td>{{$detail->items_count}}</td>
                <td>{{round($detail->total)}} TK</td>
                <td>{{Carbon\Carbon::parse($detail->order->order_time)->format('Y-m-d')}}</td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <a href="{{ route('seller.order.pending.show', $detail->id) }}"
                           class="btn btn-xs btn-success"
                           title="Show">
                            <i class="ace-icon fa fa-eye"></i>
                        </a>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8">No data available in table</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    @include('seller.partials._paginate', ['data' => $details])
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.chosen-select').chosen({
                width: '100%',
                allow_single_deselect: true,
            });

            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                todayHighlight: true,
            });
        });
    </script>
@endpush
