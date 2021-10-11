@extends('backend.layouts.master')
@section('title', 'Edit Flash Sale')
@section('page-header')
    <i class="fa fa-plus"></i> Edit Flash Sale
@endsection
@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.chosen.min.css')}}">
    <style>
        .bootstrap-timepicker-widget table td input{
            width: 70px;
        }
    </style>
@endpush

@section('content')
    @include('backend.components.page_header', [
       'fa' => 'fa fa-list',
       'name' => 'Flash Sale List',
       'route' => route('backend.campaign.flash_sale.index')
    ])

    <div class="col-sm-9">
        <form role="form"
              method="post"
              class="form-horizontal"
              enctype="multipart/form-data"
              action="{{route('backend.campaign.flash_sale.update', $sale->id)}}">
        @csrf

        <!-- Start Time -->
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="start_time">
                    Start Time <sup class="red">*</sup>
                </label>
                <div class="col-sm-4">
                    <input type="text"
                           id="start_time"
                           placeholder="Start Time"
                           class="form-control timepicker"
                           name="start_time"
                           value="{{$sale->start_time}}">
                    <strong class="red">{{ $errors->first('start_time') }}</strong>
                </div>
            </div>

            <!-- End Time -->
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="end_time">
                    End Time <sup class="red">*</sup>
                </label>
                <div class="col-sm-4">
                    <input type="text"
                           id="end_time"
                           placeholder="End Time"
                           class="form-control timepicker"
                           name="end_time"
                           value="{{$sale->end_time}}">
                    <strong class="red">{{ $errors->first('end_time') }}</strong>
                </div>
            </div>

            <!-- Min Percentage -->
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="min_percentage">
                    Min Percentage To Join <sup class="red">*</sup>
                </label>
                <div class="col-sm-4">
                    <input type="text"
                           id="min_percentage"
                           placeholder="20"
                           class="form-control"
                           name="min_percentage"
                           value="{{$sale->min_percentage}}">
                    <strong class="red">{{ $errors->first('min_percentage') }}</strong>
                </div>
            </div>

            <!-- Max Items -->
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="max_items_per_seller">
                    Max Items Per Seller <sup class="red">*</sup>
                </label>
                <div class="col-sm-4">
                    <input type="text"
                           id="max_items_per_seller"
                           placeholder="10"
                           class="form-control"
                           name="max_items_per_seller"
                           value="{{$sale->max_items_per_seller}}">
                    <strong class="red">{{ $errors->first('max_items_per_seller') }}</strong>
                </div>
            </div>

            <!-- Max Items -->
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="status">
                    Status <sup class="red">*</sup>
                </label>
                <div class="col-sm-4">
                    <select class="form-control chosen-select" name="status" id="status" data-placeholder="Status">
                        <option value=""></option>
                        <option value="1" {{$sale->status ? 'selected' : ''}}>Active</option>
                        <option value="0" {{!$sale->status ? 'selected' : ''}}>Inactive</option>
                    </select>
                    <strong class="red">{{ $errors->first('status') }}</strong>
                </div>
            </div>

            <!-- Buttons -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-4">
                    <button class="btn btn-sm btn-success submit create-button">
                        <i class="fa fa-save"></i> Update
                    </button>

                    <a href="{{route('backend.campaign.flash_sale.index')}}" class="btn btn-sm btn-gray">
                        <i class="fa fa-refresh"></i> Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection


@push('js')
    <script src="{{asset('assets/js/bootstrap-timepicker.min.js')}}"></script>
    <script>
        $(document).ready(function (){
            $('.timepicker').timepicker({
                timeFormat: 'h:i a',
                defaultTime : '00:00 AM'
            });

            $('#status').chosen();
        });
    </script>
@endpush
