@extends('backend.layouts.master')

@section('title','customer-List')
@section('page-header')
    <i class="fa fa-list"></i> customer List
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
       'name' => 'List customer',
       'route' => route('backend.customer.index')
    ])

    <form class="form-horizontal" method="post" action="{{ route('admin.user.search') }}" role="form" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered">
            <tbody><tr>
                <th  class="bg-dark" style="width: 22%"><label for="name">Name - Number - Email </label></th>
                <th class="bg-dark" style="width: 12%;">Actions</th>
            </tr>
            <tr>
                <td>
                    <input type="text" id="myInput" name="search" placeholder="Customer search here.." value="" class="input-sm form-control text-center" required>
                </td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <button type="submit" class="btn btn-xs btn-primary" title="Search">
                            <i class="ace-icon fa fa-search"></i>
                        </button>

                        <a href="{{ route('backend.customer.index') }}" class="btn btn-xs btn-info" title="Show All">
                            <i class="ace-icon fa fa-list"></i>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
        </table>
    </form>
    <table class="table table-bordered" id="table1">
        <tbody>
        <tr>
            <th class="bg-dark" style="width: 10%">SL</th>
            <th class="bg-dark" style="width: 20%">Name</th>
            <th class="bg-dark" style="width: 15%">number</th>
            <th class="bg-dark" style="width: 20%">Email</th>
            <th class="bg-dark" style="width: 10%">Gender</th>
            <th class="bg-dark" style="width: 10%">Birth Day</th>
            <th class="bg-dark" style="width: 5%">Block</th>
            <th class="bg-dark" style="width: 20%">Action</th>
        </tr>

        @forelse($users as $key => $user)
            <tr>
                <td>{{ $key+1 }}</td>
                <td> {{ $user->name }}</td>
                <td> {{ $user->mobile }}</td>
                <td> {{ $user->email }}</td>
                <td> {{ $user->gender }}</td>
                <td> {{ $user->date.'-'.$user->month.'-'.$user->year }}</td>
                <td>
                    <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger"
                    data-toggle="toggle" data-on="Active" data-off="InActive" {{ $user->status ? 'checked' : '' }}>
                </td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        @if(hasAccess('customer-view'))
                            <a href="{{ route('backend.customer.show',$user->id) }}" class="btn btn-xs btn-info"title="Edit"><i class="ace-icon fa fa-eye"></i>
                            </a>
                        @endif
                        @if(hasAccess('customer-delete'))
                            <button type="button" class="btn btn-xs btn-danger"onclick="delete_check({{$user->id}})"
                                title="Delete"><i class="ace-icon fa fa-trash-o"></i>
                            </button>
                        @endif
                    </div>
                    <form action="{{ route('backend.customer.destroy',$user->id) }}"
                          id="deleteCheck_{{ $user->id }}" method="Post">
                          @method('DELETE')
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
    @include('backend.partials._paginate', ['data' => $users])
@endsection

@push('js')
<script>

    $(function() {
      $('.toggle-class').click(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            var url = "{{ route('backend.user.block', ":id") }}";
            url = url.replace(':id', id);
            $.ajax({
                type: "GET",
                dataType: "json",
                url:url,
                data: {'status': status},
                success: function(data){
                    console.log(data.success);
                },
                error: function(data){
                    var errors = data.responseJSON;
                    console.log(data.errors);
                }
            });
      })
    })
  </script>

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
