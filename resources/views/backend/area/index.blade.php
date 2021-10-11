@extends('backend.layouts.master')
@section('title','Division List')
@section('page-header')
    <i class="fa fa-list"></i> Area Division List
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
@if(hasAccess('division-create'))
    @include('backend.components.page_header', [
       'fa' => 'fa fa-pencil',
       'name' => 'Create Division',
       'route' => route('backend.area.create-division')
    ])
@endif
    <form class="form-horizontal" method="post" action="{{ route('backend.area.division.search') }}" role="form" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered">
            <tbody><tr>
                <th  class="bg-dark" style="width: 22%"><label for="name">Area Name.... </label></th>
                <th class="bg-dark" style="width: 12%;">Actions</th>
            </tr>
            <tr>
                <td>
                    <input type="text" id="myInput" name="search" placeholder="Area search here.." value="" class="input-sm form-control text-center" required>
                </td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <button type="submit" class="btn btn-xs btn-primary" title="Search">
                            <i class="ace-icon fa fa-search"></i>
                        </button>

                        <a href="{{ route('backend.area.index') }}" class="btn btn-xs btn-info" title="Show All">
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
            <th class="bg-dark" style="width: 30%">Division</th>
            <th class="bg-dark" style="width: 10%">Action</th>
        </tr>
        @foreach($divisions as $key => $division)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $division->name }}</td>
            <td>
                <div class="btn-group btn-group-mini btn-corner">
                    @if(hasAccess('division-edit'))
                        <a href="{{ route('backend.area.edit',['id' => $division->id]) }}"class="btn btn-xs btn-info"
                            title="Edit"><i class="ace-icon fa fa-pencil"></i>
                        </a>
                    @endif
                    @if(hasAccess('division-delete'))
                        <button type="button" class="btn btn-xs btn-danger" onclick="delete_check({{ $division->id }})"
                            title="Delete"><i class="ace-icon fa fa-trash-o"></i>
                        </button>
                    @endif
                </div>
                <form action="{{ route('backend.area.destroy', ['id' => $division->id]) }}"
                      id="deleteCheck_{{ $division->id }}" method="GET">
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach



{{--        @forelse($origins as $key => $origin)--}}
{{--            <tr>--}}
{{--                <td>{{ $key + 1 }}</td>--}}
{{--                <td>{{ $origin->name }}</td>--}}
{{--                <td>{{ $origin->slug }}</td>--}}
{{--                <td>--}}
{{--                    <img src="{{ asset($origin->image) }}"--}}
{{--                         height="30"--}}
{{--                         width="120"--}}
{{--                         alt="No Image">--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    <div class="btn-group btn-group-mini btn-corner">--}}
{{--                        <a href="{{ route('backend.product.origins.edit', $origin->id) }}"--}}
{{--                           class="btn btn-xs btn-info"--}}
{{--                           title="Edit">--}}
{{--                            <i class="ace-icon fa fa-pencil"></i>--}}
{{--                        </a>--}}

{{--                        <button type="button" class="btn btn-xs btn-danger"--}}
{{--                                onclick="delete_check({{$origin->id}})"--}}
{{--                                title="Delete">--}}
{{--                            <i class="ace-icon fa fa-trash-o"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <form action="{{ route('backend.product.origins.destroy', $origin->id)}}"--}}
{{--                          id="deleteCheck_{{ $origin->id }}" method="GET">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @empty--}}
{{--            <tr>--}}
{{--                <td colspan="6">No data available in table</td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}
        </tbody>
    </table>

    @include('backend.partials._paginate', ['data' => $divisions])
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
