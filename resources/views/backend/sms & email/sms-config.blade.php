@extends('backend.layouts.master')

@section('title','Sms Config')
@section('page-header')
    <i class="fa fa-envelope-o"></i>  Sms Config
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
       'name' => 'SMS Config Create',
       'route' => route('backend.sms_config.create')
    ])

    <table class="table table-bordered">
        <tbody>
        <tr>
            <th class="bg-dark" style="width: 10px">SL</th>
            <th class="bg-dark" style="width: 40%">Name</th>
            <th class="bg-dark" style="width: 40%">Status</th>
            <th class="bg-dark" style="">Action</th>
        </tr>
        @forelse($allSms as $key => $sms)
            <tr>
                <td>{{ $key + 1 }}</td>

                <td>
                    {{ $sms->username }}
                </td>
                <td>
                   	<label class="pull-center inline">
                    <input  data-id="{{$sms->id}}" id="id-button-borders" {{ $sms->status == true?"Checked":' ' }}
                        type="checkbox" class="ace ace-switch ace-switch-5 toggle-class"">
                        <span class="lbl middle"></span>
				    </label>
                </td>

                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                            <a href="{{ route('backend.sms_config.edit', $sms->id) }}"
                                class="btn btn-xs btn-info"title="Edit"><i class="ace-icon fa fa-pencil"></i>
                            </a>

                            <button type="button" class="btn btn-xs btn-danger"
                                    onclick="delete_check({{$sms->id}})"title="Delete"><i class="ace-icon fa fa-trash-o"></i>
                            </button>
                    </div>
                    <form action="{{ route('backend.sms_config.destroy', $sms->id)}}"
                          id="deleteCheck_{{ $sms->id }}" method="GET">
                        @csrf
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No data available in table</td>
            </tr>
        @endforelse
        </tbody>
    </table>

@endsection

@push('js')
{{-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> --}}
<script type="text/javascript">

	$('.toggle-class').change(function() {
	    var status      = $(this).prop('checked') == true ;
	    var sms_id      = $(this).data('id');
	    let url         = "{{ route('backend.sms_config.status',":sms_id") }}";
	    url             = url.replace(':sms_id',sms_id);
        // console.log(status);
	    $.ajax({
	        type: "GET",
	        dataType: "json",
	        url: url,
	        data: {'status': status},
	        success: function(data){
	            console.log(data.success)
	        },
            error: function(data){
                console.log(data.status)
            }
	    });
	});


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
