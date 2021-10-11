@extends('backend.layouts.master')
@section('name','Subcategory List')
@section('page-header')
    <i class="fa fa-list"></i> Subcategory List
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
@if(hasAccess('subcategory-create'))
    @include('backend.components.page_header', [
       'fa' => 'fa fa-pencil',
       'name' => 'Create Subcategory',
       'route' => route('backend.product.sub_categories.create')
    ])
@endif
    <form class="form-horizontal" method="post" action="{{ route('backend.product.sub_categories.search') }}" role="form" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered">
            <tbody><tr>
                <th  class="bg-dark" style="width: 22%"><label for="name">Subcategory Name.... </label></th>
                <th class="bg-dark" style="width: 12%;">Actions</th>
            </tr>
            <tr>
                <td>
                    <input type="text" id="myInput" name="search" placeholder="Subcategory search here.." value="" class="input-sm form-control text-center" required>
                </td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <button type="submit" class="btn btn-xs btn-primary" title="Search">
                            <i class="ace-icon fa fa-search"></i>
                        </button>

                        <a href="{{ route('backend.product.sub_categories.index') }}" class="btn btn-xs btn-info" title="Show All">
                            <i class="ace-icon fa fa-list"></i>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
        </table>
    </form>
    <table class="table table-bordered table-hover">
        <tbody>
        <tr>
            <th class="bg-dark" >  SL</th>
            <th class="bg-dark" > Name</th>
            <th class="bg-dark" > Category</th>
            <th class="bg-dark" > Vat</th>
            <th class="bg-dark" > Commission</th>
            <th class="bg-dark" > Image</th>
            <th class="bg-dark" >  Action</th>
        </tr>
        @forelse($subCategories as $key => $subCategory)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $subCategory->name }}</td>
                <td>{{ $subCategory->category->name }}</td>
                <td>{{ $subCategory->vat }}</td>
                <td>{{ $subCategory->commission }}</td>
                <td><img src="{{ asset($subCategory->image) }}" alt="{{ asset($subCategory->image) }}" style="width: 100px;height: 50px"></td>
                <td>
                    <div class="hidden-sm hidden-xs btn-group">
                    </div>

                    <div class="btn-group btn-group-mini btn-corner">
                        @if(hasAccess('subcategory-edit'))
                            <a href="{{ route('backend.product.sub_categories.edit', $subCategory->id) }}"
                            class="btn btn-xs btn-info"
                            name="Edit">
                                <i class="ace-icon fa fa-pencil"></i>
                            </a>
                        @endif
                        @if(hasAccess('subcategory-delete'))
                            <button type="button"
                                    onclick="delete_check({{$subCategory->id}})"
                                    class="btn btn-xs btn-danger"
                                    name="Delete">
                                <i class="ace-icon fa fa-trash-o"></i>
                            </button>
                        @endif
                    </div>
                    <form action="{{ route('backend.product.sub_categories.destroy', $subCategory->id)}}"
                          id="deleteCheck_{{ $subCategory->id }}" method="GET">
                        @csrf
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">No data available in table</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    @include('backend.partials._paginate', ['data' => $subCategories])
@endsection

@push('js')
    <script type="text/javascript">
        function delete_check(id) {
            Swal.fire({
                name: 'Are you sure?',
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
