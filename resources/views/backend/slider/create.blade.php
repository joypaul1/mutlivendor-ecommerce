@extends('backend.layouts.master')
@section('title', 'Add Slider')
@section('page-header')
    <i class="fa fa-info"></i> Add Slider
@endsection
@push('css')
    <style>
        @media only screen and (min-width: 768px) {
            .widget-box.first {
                margin-top: 0 !important;
            }
        }
    </style>
@endpush

@section('content')
    @include('backend.components.page_header', [
       'fa' => 'fa fa-list',
       'name' => 'Slider List',
       'route' =>route('backend.site_config.slider.index'),
    ])

    <div class="col-sm-9">
        <form class="form-horizontal" method="post" action="{{route('backend.site_config.slider.store')}}"
              role="form"
              enctype="multipart/form-data">
        @csrf


            <!-- Image -->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="image">Image
                </label>
                <div class="col-sm-4">
                    <input name="image"
                           type="file"
                           id="image"
                           class="form-control"
                           onchange="readURL(this);">
                    <strong class="red">{{ $errors->first('image') }}</strong>
                    @if($errors->first('image'))
                        <br>
                    @endif
                    <strong class="red">Minimum 610x410 pixels</strong>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="position">Position
                </label>
                <div class="col-sm-4">
                    <input name="position"
                           type="text"
                           id="position"
                           class="form-control"
                           >
                    <strong class="red">{{ $errors->first('position') }}</strong>
                    @if($errors->first('position'))
                        <br>
                    @endif

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="short_desc">Highlight Text
                </label>
                <div class="col-sm-4">
                    <input name="short_desc"
                           type="text"
                           id="short_desc"
                           class="form-control"
                           >
                    <strong class="red">{{ $errors->first('short_desc') }}</strong>
                    @if($errors->first('short_desc'))
                        <br>
                    @endif

                </div>
                <label class="col-sm-2 control-label no-padding-right" for="color">Color Text
                </label>
                <div class="col-sm-4">
                    <input name="color"
                           type="text"
                           id="color"
                           class="form-control"
                           >
                    <strong class="red">{{ $errors->first('color') }}</strong>
                    @if($errors->first('short_desc'))
                        <br>
                    @endif

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="offer_desc">Offer Text
                </label>
                <div class="col-sm-4">
                    <input name="offer_desc"
                           type="text"
                           id="offer_desc"
                           class="form-control"
                           >
                    <strong class="red">{{ $errors->first('offer_desc') }}</strong>
                    @if($errors->first('short_desc'))
                        <br>
                    @endif

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="link">Link
                </label>
                <div class="col-sm-4">
                    <input name="link"
                           type="text"
                           id="link"
                           class="form-control"

                           >
                    <strong class="red">{{ $errors->first('short_desc') }}</strong>
                    @if($errors->first('short_desc'))
                        <br>
                    @endif

                </div>
            </div>


            <!-- Buttons -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                    <button class="btn btn-sm btn-success submit create-button"><i class="fa fa-save"></i> Add
                    </button>

                    <a href="{{route('backend.site_config.slider.index')}}" class="btn btn-sm btn-gray"> <i
                            class="fa fa-refresh"></i>
                        Cancel</a>
                </div>
            </div>
        </form>
    </div>

    <div class="col-sm-3">
        <div class="widget-box first">
            <div class="widget-header">
                <h4 class="widget-title">Current Image</h4>

                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="widget-body"
                 style="display:flex; align-items: center; justify-content: center; height:100px;">
                <div class="widget-main">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <img id="current" src="" width="100" height="100" class="img-responsive center-block"
                                 alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    $('#current')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
