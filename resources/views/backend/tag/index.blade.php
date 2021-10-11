@extends('backend.layouts.master')
@section('title','Tag List')
@section('page-header')
    <i class="fa fa-list"></i> Tag List
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
    @if (hasAccess('tag-create'))
        @include('backend.components.page_header', [
            'fa' => 'fa fa-pencil',
            'name' => 'Create Tag',
            'route' => route('backend.product.tags.create')
        ])
    @endif

    <form class="form-horizontal" method="post" action="{{ route('backend.product.tags.search') }}" role="form" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered">
            <tbody><tr>
                <th  class="bg-dark" style="width: 22%"><label for="name">Tag Names </label></th>
                <th class="bg-dark" style="width: 12%;">Actions</th>
            </tr>
            <tr>
                <td>
                    <input type="text" id="myInput" name="search" placeholder="Search here...." value="" class="input-sm form-control text-center" required>
                </td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <button type="submit" class="btn btn-xs btn-primary" title="Search">
                            <i class="ace-icon fa fa-search"></i>
                        </button>

                    <a href="{{ route('backend.product.tags.index') }}" class="btn btn-xs btn-info" title="Show All">
                            <i class="ace-icon fa fa-list"></i>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody></table>
    </form>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th class="bg-dark" style="width: 10px">SL</th>
            <th class="bg-dark" style="width: 20%">Name</th>
            <th class="bg-dark" style="width: 20%">Status</th>
            <th class="bg-dark" style="">Action</th>
        </tr>
        @forelse($tags as $key => $tag)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $tag->name }}</td>
                <td>{{ $tag->status == '1'? 'Active' : 'Inactive' }}</td>

                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        @if (hasAccess('tag-edit'))
                            <a href="{{ route('backend.product.tags.edit', $tag->id) }}"
                                class="btn btn-xs btn-info"
                                name="Edit">
                                <i class="ace-icon fa fa-pencil"></i>
                            </a>
                        @endif
                        @if (hasAccess('tag-delete'))
                            <button type="button" class="btn btn-xs btn-danger"
                                    onclick="delete_check({{$tag->id}})"
                                    title="Delete">
                                <i class="ace-icon fa fa-trash-o"></i>
                            </button>
                        @endif
                    </div>
                    <form action="{{ route('backend.product.tags.destroy', $tag->id)}}"
                          id="deleteCheck_{{ $tag->id }}" method="GET">
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

    @include('backend.partials._paginate', ['data' => $tags])
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
