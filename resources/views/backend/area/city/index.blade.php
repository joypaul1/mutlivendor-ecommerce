@extends('backend.layouts.master')
@section('title','City List')
@section('page-header')
    <i class="fa fa-list"></i> City List
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
@if(hasAccess('city-create'))
    @include('backend.components.page_header', [
       'fa' => 'fa fa-pencil',
       'name' => 'Create City',
       'route' => route('backend.area.city.create')
    ])
@endif
    <form class="form-horizontal" method="post" action="{{ route('backend.area.city.search') }}" role="form" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered">
            <tbody><tr>
                <th  class="bg-dark" style="width: 22%"><label for="name">City  Name.... </label></th>
                <th class="bg-dark" style="width: 12%;">Actions</th>
            </tr>
            <tr>
                <td>
                    <input type="text" id="myInput" name="search" placeholder="City  search here.." value="" class="input-sm form-control text-center" required>
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
            <th class="bg-dark" style="width: 5%">Division</th>
            <th class="bg-dark" style="width: 30%">City</th>
            <th class="bg-dark" style="width: 10%">Action</th>
        </tr>

        @foreach($cities as $key => $city)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $city->division->name }}</td>
                <td>{{ $city->name }}</td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        @if(hasAccess('city-edit'))
                            <a href="{{ route('backend.area.city.show', ['id' => $city->id]) }}"
                                class="btn btn-xs btn-info"title="Edit"><i class="ace-icon fa fa-pencil"></i>
                            </a>
                        @endif
                        @if(hasAccess('city-delete'))
                            <button type="button" class="btn btn-xs btn-danger"
                                    onclick="delete_check({{ $city->id }})"title="Delete"><i class="ace-icon fa fa-trash-o"></i>
                            </button>
                        @endif
                    </div>
                    <form action="{{ route('backend.area.city.destroy', ['id' => $city->id]) }}"
                          id="deleteCheck_{{ $city->id }}" method="GET">
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

        @include('backend.partials._paginate', ['data' => $cities])
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
