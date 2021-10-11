@extends('backend.layouts.master')
@section('title', 'Add Sub-Module')
@section('page-header')
    <i class="fa fa-info"></i> Add Submodule
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
       'name' => 'Submodule List',
       'route' =>route('backend.submodule.index'),
    ])

    <div class="col-sm-9">
        <form class="form-horizontal" method="post" action="{{route('backend.submodule.update',$submodule->id)}}"
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
                           value="{{ $submodule->name??old('name')}}"
                           >
                    <strong class="red">{{ $errors->first('name') }}</strong>
                    @if($errors->first('position'))
                        <br>
                    @endif
                </div>
            </div>

              <!-- module -->
              <div class="form-group">
                <label class="col-md-4 control-label no-padding-right" for="module_id">Module
                    <sup class="red">*</sup></label>

                <div class="col-md-5">
                    <div class="text-center">
                        <select
                            class="chosen-select form-control"
                            data-placeholder="- Category - "
                            name="module_id"
                            required
                            id="module_id">
                            <option></option>
                            @foreach($modules as $module)
                                <option value="{{$module->id}}"{{$submodule->module_id == $module->id?'Selected' : ' '  }}>
                                    {{$module->name}}
                                </option>
                            @endforeach

                        </select>
                    </div>
                    <strong class="red">{{$errors->first('module_id')}}</strong>
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

