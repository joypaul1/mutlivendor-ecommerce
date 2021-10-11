@extends('backend.layouts.master')
@section('title', 'Add Module')
@section('page-header')
    <i class="fa fa-info"></i> Add Module
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
       'name' => 'Module List',
       'route' =>route('backend.module.index'),
    ])

    <div class="col-sm-9">
        <form class="form-horizontal" method="post" action="{{route('backend.module.store')}}"
              role="form"
              enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label class="col-sm-4 control-label no-padding-right" for="image">Name
                </label>
                <div class="col-sm-5">
                    <input name="name"
                           type="text"
                           id="position"
                           class="form-control"
                           required=""
                           value="{{old('name')}}"
                           >
                    <strong class="red">{{ $errors->first('name') }}</strong>
                    @if($errors->first('position'))
                        <br>
                    @endif
                </div>
            </div>


            <!-- Buttons -->
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-5">
                    <button class="btn btn-sm btn-success submit create-button"><i class="fa fa-save"></i> Add
                    </button>
                    <a href="{{route('backend.permission.index')}}" class="btn btn-sm btn-gray"> <i
                            class="fa fa-refresh"></i>
                        Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection

