@extends('backend.layouts.master')

@section('title','Category List')
@section('page-header')
    <i class="fa fa-list"></i> Category List
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
       'name' => 'Create Category',
       'route' => route('backend.product.categories.create')
    ])

    <form class="form-horizontal" method="post" action="{{ route('backend.product.categories.search') }}" role="form" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered">
            <tbody><tr>
                <th  class="bg-dark" style="width: 22%"><label for="name">Category Name.... </label></th>
                <th class="bg-dark" style="width: 12%;">Actions</th>
            </tr>
            <tr>
                <td>
                    <input type="text" id="myInput" name="search" placeholder="Category search here.." value="" class="input-sm form-control text-center" required>
                </td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <button type="submit" class="btn btn-xs btn-primary" title="Search">
                            <i class="ace-icon fa fa-search"></i>
                        </button>

                        <a href="{{ route('backend.product.categories.index') }}" class="btn btn-xs btn-info" title="Show All">
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
            <th class="bg-dark" style="width: 10px">SL</th>
            <th class="bg-dark" style="width: 20%">Title</th>
            <th class="bg-dark" style="width: 20%">Browse Category</th>
            <th class="bg-dark" style="width: 10%">Home</th>
            <th class="bg-dark" style="width: 10%">Display On Home</th>
            <th class="bg-dark" style="width: 20%">Image</th>
            <th class="bg-dark" style="">Action</th>
        </tr>
        @forelse($categories as $key => $category)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->browse_category }}</td>
                <td>{{ $category->show_on_top ? 'Yes' : 'No' }}</td>
                <td>{{ $category->display_on_home ? 'Yes' : 'No' }}</td>
                <td>
                    @if ($category->image)
                        <img src="{{ asset($category->image??'-') }}"height="30"idth="120"
                        alt="{{ ($category->image??' ') }}">
                    @endif
                </td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                            <a href="{{ route('backend.product.categories.edit', $category->id) }}"
                            class="btn btn-xs btn-info"
                            title="Edit">
                                <i class="ace-icon fa fa-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-xs btn-danger"onclick="delete_check({{$category->id}})"
                                title="Delete"><i class="ace-icon fa fa-trash-o"></i>
                            </button>

                    </div>
                    <form action="{{ route('backend.product.categories.destroy', $category->id)}}"
                          id="deleteCheck_{{ $category->id }}" method="GET">
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

    @include('backend.partials._paginate', ['data' => $categories])
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
