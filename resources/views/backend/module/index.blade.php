@extends('backend.layouts.master')

@section('title','module List')
@section('page-header')
    <i class="fa fa-list"></i> module List
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
       'name' => 'Create module',
       'route' => route('backend.module.create')
    ])

    <table id="simple-table" class="table  table-bordered table-hover">

        <thead>
            <tr>
                <th class="bg-dark" style="">SL</th>
                <th class="bg-dark" style="">Name</th>
                {{-- <th class="bg-dark" style="">module Slug </th> --}}
                <th class="bg-dark" style="">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($modules as $key => $module)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $module->name }}</td>
                    {{-- <td>{{ $module->slug }}</td> --}}
                    <td>
                        <div class="btn-group btn-group-mini btn-corner">
                            <a href="{{ route('backend.module.edit', $module->id) }}"
                               class="btn btn-xs btn-info"
                               title="Edit">
                                <i class="ace-icon fa fa-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-xs btn-danger"
                                    onclick="delete_check({{$module->id}})"
                                    title="Delete">
                                <i class="ace-icon fa fa-trash-o"></i>
                            </button>
                        </div>
                        <form action="{{ route('backend.module.destroy', $module->id)}}"
                              id="deleteCheck_{{ $module->id }}" method="DELETE">
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

    @include('backend.partials._paginate', ['data' => $modules])
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
