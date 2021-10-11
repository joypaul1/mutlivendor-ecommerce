@extends('seller.layouts.master')
@section('title','Seller Profile')
@section('page-header')
    <i class="ace-icon glyphicon glyphicon-user"></i> Bank Account
@stop

@section('content')
    @include('backend.components.page_header', [
       'fa' => 'fa fa-list',
       'name' => 'Seller Profile',
       'route' => route('backend.product.child_categories.index')
    ])
<?php
$id = \App\Models\BankAccount::first();

?>
    <div class="col-sm-9">

        <form class="form-horizontal"
              method="post"
              action="{{route('seller.bank-info', $id)}}"
              role="form"
              enctype="multipart/form-data">
        @csrf

        <!-- Name -->

            <div class="form-group">
                <label class="col-sm-3 " for="name">Account Title</label>

                <div class="col-sm-8">
                    <input type="text"
                           id="AccountTitle"
                           placeholder=" - Your Account Title -"
                           class="form-control input-sm"
                           name="account_title"
                           value="{{ $id ? $id->account_title : ''}}"
                    >
                </div>
            </div>


        <!-- Name -->
            <div class="form-group">
                <label class="col-sm-3 " for="proprietor_name">Account Number</label>

                <div class="col-sm-8">
                    <input type="text"
                           id="accountNumber"
                           placeholder=" - Example: 0000-XXXX-XXXX-0000 -"
                           class="form-control input-sm"
                           name="account_number"
                           {{--                           required--}}
                           value="{{ $id ? $id->account_number : ''}}"
                    >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3" for="bank_name">Bank Name </label>

                <div class="col-sm-8">
                    <select class="form-control" name="bank_name" id="#">
                        @foreach($bankNames as $bName)
                        <option value="{{$bName->id}}">{{ $bName->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Corporate address --}}
            <div class="form-group">
                <label class="col-sm-3 " for="crporate_address">Branch Name</label>

                <div class="col-sm-8">
                    <input type="text"
                           id="branchName"
                           placeholder=" - Example: Branch name of Main Bank -"
                           class="form-control input-sm"
                           name="barnch_name"
                           {{--                           required--}}
                           value="{{ $id ? $id->barnch_name : '' }}"
                    >
                    {{--                    <strong class=" red">{{ $errors->first('crporate_address') }}</strong>--}}
                </div>
            </div>

            {{-- Vat Registration number --}}
            <div class="form-group">
                <label class="col-sm-3 " for="vat_registration_number">Routing number </label>

                <div class="col-sm-8">
                    <input type="text"
                           id="routingNumber"
                           placeholder=" - Your Routing number -"
                           class="form-control input-sm"
                           name="routing_number"
                           {{--                           required--}}
                           value="{{$id ? $id->routing_number: ''}}"
                    >
                </div>
            </div>


            {{-- owners NID numberr --}}
            <div class="form-group">
                <label class="col-sm-3 " for="nid_number">Upload Cheque Copy</label>

                <div class="col-sm-6">
                    <input type="file"
                           id="nid_number"
                           class="form-control input-sm"
                           name="cheque_copy"
                           accept="image/*"
                           {{--                           required--}}
                           value="">
                    <span>Allow image file, PDF and MS word</span>
                    {{--                    <strong class=" red">{{ $errors->first('nid_number') }}</strong>--}}
                </div>

            </div>
            <div class="form-group">
                <label class="col-sm-9"></label>
                <div class="col-md-3">
                    <input type="submit" name="btn" class="btn btn-outline-info btn-lgs">
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-3">
        <img src="{{ asset($id ? $id->cheque_copy : '') }}" width="100px" height="100px">
    </div>

@endsection
@push('js')

@endpush
