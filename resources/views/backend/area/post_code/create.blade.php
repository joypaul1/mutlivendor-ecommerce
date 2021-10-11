@extends('backend.layouts.master')
@section('title', 'Add Area')
@section('page-header')
    <i class="fa fa-plus"></i> Add Area
@endsection

@section('content')
    @include('backend.components.page_header', [
       'fa' => 'fa fa-list',
       'name' => 'Area List',
       'route' => route('backend.area.post_code.index')
    ])

    <div class="col-sm-9">
        <form role="form"
              method="post"
              class="form-horizontal"
              enctype="multipart/form-data"
              action="{{ route('backend.area.post_code.store') }}"
        >
            @csrf

            <!-- Division Name -->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="name">Division Name <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <select class="form-control input-sm" name="division_id" id="id">
                        <option value="-1">--select--</option>
                        @foreach($divisions as $division)
                            <option value="{{ $division->id }}">{{ $division->name }}</option>
                        @endforeach
                    </select>
                    {{--                    <strong class="red">{{ $errors->first('name') }}</strong>--}}
                </div>
            </div>
            {{--City Name--}}
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="name">City Name <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <select class="form-control input-sm" name="city_id" id="getCityById">

                    </select>
                    {{--                    <strong class="red">{{ $errors->first('name') }}</strong>--}}
                </div>
            </div>
                {{-- Post-code--}}
            <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="name"> Area <sup class="red">*</sup></label>
                    <div class="col-sm-4">
                        <input type="text"
                               id="name"
                               name="name"
                               placeholder="Area Name"
                               class="form-control input-sm"
                            {{--                           value="{{ $city->name }}"--}}
                        >
                        {{--                    <strong class="red">{{ $errors->first('name') }}</strong>--}}
                    </div>
                </div>

            <!-- Buttons -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                    <button class="btn btn-sm btn-success submit create-button">
                        <i class="fa fa-save"></i> Add
                    </button>
                    <a href="{{route('backend.area.post_code.index')}}" class="btn btn-sm btn-gray">
                        <i class="fa fa-refresh"></i> Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>

@endsection

@push('js')

    <script>
        $(document).ready(function () {
            $('#id').change(function () {
                var divId = $(this).val();
                // var jsonData = {divisionId:divId};
                var url = "{{ route('postCode.getCity', ":divId") }}";
                url = url.replace(':divId', divId);
                $.ajax({
                    url      : url,
                    method   : 'GET',
                    // data     : 'jsonData',
                    dataType : 'json',
                    success  : function(data) {
                        $("#getCityById").empty();
                        $("#getCityById").append('<Option value="' + -1 + '">' + "--select--" + '</Option>');
                        $.each(data, function (key, value) {
                            $("#getCityById").append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    },
                    error: function(errorMessage) {
                        alert(errorMessage);
                    },

                });
            });
        });
    </script>



@endpush

