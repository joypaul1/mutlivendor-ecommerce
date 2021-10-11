@extends('backend.layouts.master')

@section('title','Subcribers-List')
@section('page-header')
    <i class="fa fa-list"></i> Subcribers List
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
       'name' => 'List subscribers',
       'route' => route('backend.customer.subscribe')
    ])

    <form class="form-horizontal" method="post" action="{{ route('admin.user.subscribe.search') }}" role="form" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered">
            <tbody><tr>
                <th  class="bg-dark" style="width: 22%"><label for="name">Email </label></th>
                <th class="bg-dark" style="width: 12%;">Actions</th>
            </tr>
            <tr>
                <td>
                    <input type="text" id="myInput" name="search" placeholder="Email search here.." value="" class="input-sm form-control text-center" required>
                </td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <button type="submit" class="btn btn-xs btn-primary" title="Search">
                            <i class="ace-icon fa fa-search"></i>
                        </button>

                        <a href="{{ route('backend.customer.subscribe') }}" class="btn btn-xs btn-info" title="Show All">
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
            <th class="bg-dark" style="width: 20%">Email</th>
            <th class="bg-dark" style="width: 10%">Date</th>
            {{-- <th class="bg-dark" style="width: 20%">Action</th> --}}
        </tr>

        @forelse($subscribers as $key => $subscriber)
            <tr>
                <td>{{ $key+1 }}</td>
                <td> {{ $subscriber->email }}</td>
                <td> {{ $subscriber->updated_at->format('d-M-Y') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="7">No data available in table</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    @include('backend.partials._paginate', ['data' => $subscribers])
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
