@extends('seller.layouts.master')
@section('title','Flash Sale List')
@section('page-header')
    <i class="fa fa-list"></i> Flash Sale List
@stop
@push('css')
    <style>
        table th,
        td {
            text-align: center !important;
            vertical-align: middle !important;
        }
    </style>
@endpush

@section('content')
    @include('seller.components.page_header', [
       'fa' => 'fa fa-pencil',
       'name' => 'Create Flash Sale',
       'route' => route('seller.campaign.flash_sale.create')
    ])

    <table class="table table-bordered">
        <tbody>
        <tr>
            <th class="bg-dark" style="width: 5%">SL</th>
            <th class="bg-dark" style="width: 15%">Start</th>
            <th class="bg-dark" style="width: 15%">End</th>
            <th class="bg-dark" style="width: 15%">Percentage</th>
            <th class="bg-dark" style="width: 15%">Items</th>
            <th class="bg-dark" style="width: 10%">Action</th>
        </tr>
        @forelse($sales as $key => $sale)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $sale->start_time->format('Y-m-d | h:i a') }}</td>
                <td>{{ $sale->end_time->format('Y-m-d | h:i a') }}</td>
                <td>{{ $sale->percentage . '%' }}</td>
                <td>{{ $sale->count }}</td>
{{--                <td>{{ $sale->max_items_per_seller }}</td>--}}
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <a href="{{ route('seller.campaign.flash_sale.edit',$sale->start_time) }}"
                           class="btn btn-xs btn-info"
                           title="Edit">
                            <i class="ace-icon fa fa-pencil"></i>
                        </a>

                        <button type="button" class="btn btn-xs btn-danger"
                                onclick="delete_check({{$sale->id}})"
                                title="Delete">
                            <i class="ace-icon fa fa-trash-o"></i>
                        </button>
                    </div>
                    <form action="{{ route('seller.campaign.flash_sale.destroy', $sale->start_time)}}"
                          id="deleteCheck_{{ $sale->id }}" method="GET">
                        @csrf
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No data available in table</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    @include('backend.partials._paginate', ['data' => $sales])
@endsection

@push('js')
    <script type="text/javascript">
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
