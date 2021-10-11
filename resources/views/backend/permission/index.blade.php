@extends('backend.layouts.master')

@section('title','permission List')
@section('page-header')
    <i class="fa fa-list"></i> permission List
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
    @include('backend.components.page_header', [
       'fa' => 'fa fa-pencil',
       'name' => 'Create permission',
       'route' => route('backend.permission.create')
    ])

    <table id="simple-table" class="table  table-bordered table-hover">

        <thead>
            <tr>
                <th class="bg-dark" style="">SL</th>
                <th class="bg-dark" style="">Name</th>
                <th class="bg-dark" style="">Permission Slug </th>
                <th class="bg-dark" style="">Parent </th>
                <th class="bg-dark" style="">Module Name </th>
                <th class="bg-dark" style="">Sub-Module Name </th>
                <th class="bg-dark" style="">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($permissions as $key => $permission)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->slug }}</td>
                    <td>{{ $permission->parent??' ' }}</td>
                    <td>{{ $permission->module->name??' ' }}</td>
                    <td>{{ $permission->submodule->name??' ' }}</td>
                    <td>
                        <div class="btn-group btn-group-mini btn-corner">
                            <a href="{{ route('backend.permission.edit', $permission->id) }}"
                               class="btn btn-xs btn-info"
                               title="Edit">
                                <i class="ace-icon fa fa-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-xs btn-danger"
                                    onclick="delete_check({{$permission->id}})"
                                    title="Delete">
                                <i class="ace-icon fa fa-trash-o"></i>
                            </button>
                        </div>
                        <form action="{{ route('backend.permission.destroy', $permission->id)}}"
                              id="deleteCheck_{{ $permission->id }}" method="DELETE">
                            @csrf
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No data available in table</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @include('backend.partials._paginate', ['data' => $permissions])
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
