@extends('backend.layouts.master')

@section('title','Admin List')
@section('page-header')
    <i class="fa fa-list"></i> Admin List
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
       'name' => 'Create admin',
       'route' => route('backend.admin.create')
    ])


    <form class="form-horizontal" method="post" action="{{ route('backend.admin.search') }}" role="form" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th  class="bg-dark" style="width: 22%"><label for="name">Name - Email </label></th>
                    <th class="bg-dark" style="width: 12%;">Actions</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="myInput" name="search" placeholder="Admin search here.." value="" class="input-sm form-control text-center" required>
                    </td>
                    <td>
                        <div class="btn-group btn-group-mini btn-corner">
                            <button type="submit" class="btn btn-xs btn-primary" title="Search">
                                <i class="ace-icon fa fa-search"></i>
                            </button>

                            <a href="{{ route('backend.admin.index') }}" class="btn btn-xs btn-info" title="Show All">
                                <i class="ace-icon fa fa-list"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <table id="simple-table" class="table  table-bordered table-hover">

        <thead>
            <tr>
                <th class="bg-dark" style="">SL</th>
                <th class="bg-dark" style="">Name</th>
                <th class="bg-dark" style="">Email</th>
                <th class="bg-dark" style="">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($admins as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>
                        <div class="btn-group btn-group-mini btn-corner">

                                <a href="{{ route('backend.admin.permission', $admin->id) }}"
                                class="btn btn-xs btn-warning"
                                title="Edit">
                                    <i class="ace-icon fa fa-lock"></i>
                                </a>

                                <a href="{{ route('backend.admin.edit', $admin->id) }}"
                                    class="btn btn-xs btn-info"title="Edit"><i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <button type="button" class="btn btn-xs btn-danger"
                                        onclick="delete_check({{$admin->id}})"title="Delete"><i class="ace-icon fa fa-trash-o"></i>
                                </button>

                        </div>
                        <form action="{{ route('backend.admin.destroy', $admin->id)}}"
                              id="deleteCheck_{{ $admin->id }}" method="DELETE">
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

    @include('backend.partials._paginate', ['data' => $admins])
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
