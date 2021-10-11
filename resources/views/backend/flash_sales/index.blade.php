@extends('backend.layouts.master')
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
@if(hasAccess('flash-sale-create'))
    @include('backend.components.page_header', [
       'fa' => 'fa fa-pencil',
       'name' => 'Create Flash Sale',
       'route' => route('backend.campaign.flash_sale.create')
    ])
@endif
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th class="bg-dark" style="width: 5%">SL</th>
            <th class="bg-dark" style="width: 15%">Start</th>
            <th class="bg-dark" style="width: 15%">End</th>
            <th class="bg-dark" style="width: 15%">Min Percentage</th>
            <th class="bg-dark" style="width: 15%">Seller Max Items</th>
            <th class="bg-dark" style="width: 15%">Status</th>
            <th class="bg-dark" style="width: 10%">Action</th>
        </tr>
        @forelse($flash_sales as $key => $sale)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $sale->start_time }}</td>
                <td>{{ $sale->end_time }}</td>
                <td>{{ $sale->min_percentage . '%' }}</td>
                <td>{{ $sale->max_items_per_seller }}</td>
                <td>
                    <span class="badge badge-pill {{$sale->status ? 'badge-info' : 'badge-dark'}}">
                        {{ $sale->status ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        @if(hasAccess('flash-sale-edit'))
                            <a href="{{ route('backend.campaign.flash_sale.edit', $sale->id) }}"
                            class="btn btn-xs btn-info"
                            title="Edit"> <i class="ace-icon fa fa-pencil"></i>
                            </a>
                        @endif
                        @if(hasAccess('flash-sale-delete'))
                            <button type="button" class="btn btn-xs btn-danger"onclick="delete_check({{$sale->id}})"
                                    title="Delete"><i class="ace-icon fa fa-trash-o"></i>
                            </button>
                        @endif
                    </div>
                    <form action="{{ route('backend.campaign.flash_sale.destroy', $sale->id)}}"
                          id="deleteCheck_{{ $sale->id }}" method="GET">
                        @csrf
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="10">No data available in table</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    @include('backend.partials._paginate', ['data' => $flash_sales])
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
