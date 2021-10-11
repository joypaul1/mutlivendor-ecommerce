@extends('backend.layouts.master')
@section('title','Seller Profile')
@section('page-header')
    <i class="ace-icon glyphicon glyphicon-user"></i> Seller Profile
@stop

@section('content')
    @include('backend.components.page_header', [
       'fa' => 'fa fa-list',
       'name' => 'Seller Profile',
       'route' => route('seller.profile.index')
    ])
<div class="col-sm-9">

    <form class="form-horizontal" method="post" action="{{ route('backend.seller.store') }}" role="form" enctype="multipart/form-data">
        {{-- <input type="hidden" name="_token" value="i0V7e0axm2FZFQsRWQRK28tnNqpHYctIypiLiWds"> --}}
        @csrf

            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-1">
                    Account Type <span class="red">*</span>
                </label>

                <div class="col-sm-5">
                    <div class="control-group">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="radio">
                                    <label>
                                        <input type="radio" required="" class="ace" name="type" value="0">
                                        <span class="lbl">Personal</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="radio">
                                    <label>
                                        <input type="radio" required="" name="type" class="ace" value="1">
                                        <span class="lbl">Business</span>
                                    </label>
                                </div>
                            </div>

                            <span class="red"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right " for="name">
                    Full Name <span class="red">*</span>
                </label>

                <div class="col-sm-5">
                    <input type="text" required="" id="name" name="name" placeholder="Your full name" class="col-xs-10 col-sm-10">
                    <br><br>
                    <span class="red"></span>
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right " for="shop_name">
                    Shop Name <span class="red">*</span>
                </label>

                <div class="col-sm-5">
                    <input type="text" required="" id="shop_name" name="shop_name" placeholder="Your shop's name" class="col-xs-10 col-sm-10">
                    <br><br>
                    <span class="red"></span>
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right " for="mobile">
                    Mobile <span class="red">*</span>
                </label>

                <div class="col-sm-5">
                    <div class="input-group">
                        <span class="input-group-addon">+88 </span>
                        <input id="mobile" required="" type="text" class="col-xs-10 col-sm-10" name="mobile" placeholder="Your mobile no">
                    </div>
                    <span class="red"></span>
                </div>
            </div>



            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right " for="password">
                    Password <span class="red">*</span>
                </label>

                <div class="col-sm-5">
                    <input type="password" required="" id="password" name="password" placeholder="Minimum 8 characters of letters and numbers" class="col-xs-10 col-sm-10">
                    <br><br>
                    <span class="red"></span>
                </div>
            </div>


            <!-- Buttons -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5">
                    <button class="btn btn-sm btn-success submit create-button"><i class="fa fa-save"></i> Add
                    </button>

                    <a href="https://anazbd.com/sadmin/slider" class="btn btn-sm btn-gray"> <i class="fa fa-refresh"></i>
                        Cancel</a>
                </div>
            </div>
        </form>
    </div>


@endsection



