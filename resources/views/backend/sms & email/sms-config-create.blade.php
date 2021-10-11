@extends('backend.layouts.master')
@section('title', 'SMS Config')
@section('page-header')
    <i class="fa fa-paper-plane"></i> SMS Config
@endsection

@section('content')
    @include('backend.components.page_header', [
       'fa' => 'fa fa-list',
       'name' => 'SMS Config',
       'route' => route('backend.sms_config.get')
    ])

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-sm-9">
        <form role="form"
              method="post"
              class="form-horizontal"
              enctype="multipart/form-data"
              action="{{route('backend.sms_config.store')}}">
        @csrf

            <!-- Username -->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="username">Username <sup class="red">*</sup></label>
                <div class="col-sm-6">
                    <input type="text"
                           id="username"
                           name="username"
                           placeholder="Username/sms company name"
                           class="form-control"
                           {{-- value="{{$sms->username ?? ''}}" --}}
                           required>
                    <strong class="red">{{ $errors->first('username') }}</strong>
                </div>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="api">Api Key <sup class="red">*</sup></label>
                <div class="col-sm-6">
                    <input type="text"
                           id="api"
                           name="api_key"
                           placeholder="apikey=*********"
                           class="form-control"
                           {{-- value="{{$sms->api_key ?? ''}}" --}}
                           required>
                    <strong class="red">{{ $errors->first('api_key') }}</strong>
                </div>
            </div>

            <!-- Secret -->
            {{-- <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="secret_key"> Secret Key <sup class="red">*</sup></label>
                <div class="col-sm-6">
                    <input  type="text"
                            id="secret_key"
                            name="secret_key"
                            placeholder="secretkey=********"
                            class="form-control"
                            required>
                    <strong class="red">{{ $errors->first('secret_key') }}</strong>
                </div>
            </div> --}}


            <!-- Sender -->
            {{-- <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="sender_id"> Sender Id <sup class="red">*</sup></label>
                <div class="col-sm-6">
                    <input  type="text"
                            id="sender_id"
                            name="sender_id"
                            placeholder="sender_id:******"
                            class="form-control"
                            required>
                    <strong class="red">{{ $errors->first('sender_id') }}</strong>
                </div>
            </div> --}}


            <!-- message -->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="message">Message <sup class="red">*</sup></label>
                <div class="col-sm-6">
                <textarea name="message" id="message" cols="57" rows="3" required> </textarea>
                    <strong class="red">{{ $errors->first('message') }}</strong>
                </div>
            </div>

            {{-- status --}}
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="status">Status <sup class="red">*</sup></label>
                <div class="col-sm-6">
                    <select name="status" id="status" >
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    <strong class="red">{{ $errors->first('status') }}</strong>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="status"></label>
                <div class="col-sm-6 pull-right">
                    <button type="submit" class="btn btn-sm btn-success"> Save </button> <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                </div>
            </div>

        </form>
    </div>
@endsection
