@extends('backend.layouts.master')
@section('title', 'Update city')
@section('page-header')
    <i class="fa fa-plus"></i> Update City
@endsection

@section('content')
    @include('backend.components.page_header', [
       'fa' => 'fa fa-list',
       'name' => 'City&Division List',
       'route' => route('backend.area.city.index')
    ])

    <div class="col-sm-9">
        <form role="form"
              method="post"
              class="form-horizontal"
              enctype="multipart/form-data"
              action="{{ route('backend.area.city.update', ['id' => $city->id]) }}"
        >
            @csrf

            {{-- City Name--}}
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="name">City Name <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="text"
                           id="name"
                           name="name"
                           placeholder="City Name"
                           class="form-control input-sm"
                           value="{{ $city->name }}">
                    {{--                    <strong class="red">{{ $errors->first('name') }}</strong>--}}
                </div>
            </div>


            <!-- Division Name -->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="name">Division Name <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <select class="form-control input-sm" name="division_id" id="divisionId">
                        @foreach($divisions as $division)
                            <option value="{{ $division->id }}">{{ $division->name }}</option>
                        @endforeach
                    </select>
                    {{--                    <strong class="red">{{ $errors->first('name') }}</strong>--}}
                </div>
            </div>

            <!-- Buttons -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                    <button class="btn btn-sm btn-success submit create-button">
                        <i class="fa fa-save"></i> Update
                    </button>
                    <a href="{{route('backend.area.city.index')}}" class="btn btn-sm btn-gray">
                        <i class="fa fa-refresh"></i> Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('js')

    <script>
        $(document).ready(function(){
            $('#divisionId').val('{{ $city->division_id }}');
        });
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

