@extends('backend.layouts.master')
@section('title','Warranty Type List')
@section('page-header')
    Warranty Type List
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
@if(hasAccess('warranty-create'))
    @include('backend.components.page_header', [
       'fa' => 'fa fa-pencil',
       'name' => 'Create Warranty Type',
       'route' => route('backend.product.warranty-types.create')
    ])
@endif

    <form class="form-horizontal" method="post" action="{{ route('backend.product.warranty-types.search') }}" role="form" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered">
            <tbody><tr>
                <th  class="bg-dark" style="width: 22%"><label for="name">Warranty Name.... </label></th>
                <th class="bg-dark" style="width: 12%;">Actions</th>
            </tr>
            <tr>
                <td>
                    <input type="text" id="myInput" name="search" placeholder="Warranty search here.." value="" class="input-sm form-control text-center" required>
                </td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <button type="submit" class="btn btn-xs btn-primary" title="Search">
                            <i class="ace-icon fa fa-search"></i>
                        </button>

                        <a href="{{ route('backend.product.warranty-types.index') }}" class="btn btn-xs btn-info" title="Show All">
                            <i class="ace-icon fa fa-list"></i>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
        </table>
    </form>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th class="bg-dark" style="width: 5%">SL</th>
            <th class="bg-dark" style="width: 30%">Name</th>
            {{-- <th class="bg-dark" style="width: 30%">Time</th> --}}
            <th class="bg-dark" style="width: 10%">Action</th>
        </tr>
        @forelse($types as $key => $type)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $type->name }}</td>
                {{-- <td>{{ $type->time }}</td> --}}
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        @if(hasAccess('warranty-create'))
                            <a href="{{ route('backend.product.warranty-types.edit', $type->id) }}"
                            class="btn btn-xs btn-info"
                            title="Edit">
                                <i class="ace-icon fa fa-pencil"></i>
                            </a>
                        @endif
                        @if(hasAccess('warranty-create'))
                            <button type="button" class="btn btn-xs btn-danger"
                                    onclick="delete_check({{$type->id}})"
                                    title="Delete">
                                <i class="ace-icon fa fa-trash-o"></i>
                            </button>
                        @endif
                    </div>
                    <form action="{{ route('backend.product.warranty-types.destroy', $type->id)}}"
                          id="deleteCheck_{{ $type->id }}" method="GET">
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

    @include('backend.partials._paginate', ['data' => $types])
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
