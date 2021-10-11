<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>Seller Registration | {{ $info->name }} </title>

    <meta name="description" content="User login page"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}"/>

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.googleapis.com.css') }}"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}"/>

    <style>
        .red {
            color: red !important;
        }

        .code-input-group {
            position: relative;
        }

        .code-btn {
            position: absolute;
            right: 2%;
            bottom: 20%;
            border: none;
            background: none;
            color: #1a9cb7;
        }

        .code-btn:hover {
            color: #005077;
        }

        .code-btn:disabled {
            color: gray;
        }

        .header {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 15px;
        }

        .header i {
            margin-right: 4px !important;
        }
    </style>

</head>

<body class="login-layout light-login">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-md-12 ">
                <div class="login-container login-width-new" style="width: 800px; margin: auto">
                    <div class="left text-center">
                        <h1>
                            {{-- <i class="ace-icon fa fa-leaf green"></i> --}}
                            <span class="white" style="color: #403b3b!important;font-size: 20px"
                                  id="id-text2">Welcome! You are just one step away to sell on {{ $info->name }}.</span>
                        </h1>
                        @if($errors->any())
                            <div class="alert alert-success" role="alert">
                                @foreach ($errors->all() as $error)
                                    <h4 class="red" class="alert-heading"> {{ $error }} </h4>
                                @endforeach
                            </div>
                        @endif
                        {{-- <h4 class="blue center" id="id-company-text">&copy; Compnay Name</h4> --}}
                    </div>

                    <div class="space-12"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <div class="" style="text-align:end">
                                        <span style="font-size: 14px">All ready have an account? <a
                                                href="{{ route('seller.login.form') }}">Sign In</a></span>
                                    </div>
                                    <h4 class="header blue lighter bigger text-center">
                                        <i class="ace-icon glyphicon glyphicon-user"></i>
                                        Sign Up
                                    </h4>

                                    <div class="space-6"></div>
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form class="form-horizontal" role="form"
                                          action="{{ route('seller.register.post') }}" method="Post">
                                        @csrf
                                        {{-- Business Type --}}
                                        <div class="form-group">
                                            <label class="col-sm-4" for="form-field-1">
                                                Account Type <span class="red">*</span>
                                            </label>

                                            <div class="col-sm-8">
                                                <div class="control-group">
                                                    <div class="row">

                                                        <div class="col-md-3">
                                                            <div class="radio">
                                                                <label style="padding-left: 10px">
                                                                    <input type="radio"
                                                                           required
                                                                           class="ace"
                                                                           name="type"
                                                                           value="0">
                                                                    <span class="lbl"><span style="margin-left: 5px">Personal</span></span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio"
                                                                           required
                                                                           name="type"
                                                                           class="ace"
                                                                           value="1">
                                                                    <span class="lbl"><span style="margin-left: 5px">Business</span></span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <span class="red">{{ $errors->first('type')}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Name --}}
                                        <div class="form-group">
                                            <label class="col-sm-4" for="name">
                                                Full Name <span class="red">*</span>
                                            </label>

                                            <div class="col-sm-8">
                                                <input type="text"
                                                       required
                                                       id="name"
                                                       autocomplete="off"
                                                       name="name"
                                                       placeholder="Your full name"
                                                       class="col-sm-12">
                                                <br><br>
                                                <span class="red">{{ $errors->first('name')}}</span>
                                            </div>
                                        </div>

                                        {{-- Shop name--}}
                                        <div class="form-group">
                                            <label class="col-sm-4" for="shop_name">
                                                Shop Name <span class="red">*</span>
                                            </label>

                                            <div class="col-sm-8">
                                                <input type="text"
                                                       required
                                                       autocomplete="off"
                                                       id="shop_name"
                                                       name="shop_name"
                                                       placeholder="Your shop's name"
                                                       class="col-sm-12">
                                                <br><br>
                                                <span class="red">{{ $errors->first('shop_name')}}</span>
                                            </div>
                                        </div>

                                        {{-- Mobiile --}}
                                        <div class="form-group">
                                            <label class="col-sm-4" for="mobile">
                                                Mobile <span class="red">*</span>
                                            </label>

                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">+88 </span>
                                                    <input id="mobile"
                                                           required
                                                           autocomplete="off"
                                                           type="text"
                                                           class="col-sm-12"
                                                           name="mobile"
                                                           placeholder="Your mobile no">
                                                </div>
                                                <span class="red">{{ $errors->first('mobile')}}</span>
                                            </div>
                                        </div>

                                        {{-- Verification --}}
                                        <div class="form-group">
                                            <label class="col-sm-4" for="otp">
                                                Verification Code <span class="red">*</span>
                                            </label>

                                            <div class="col-sm-8">
                                                <div class="input-group code-input-group" style="width: 100%;">
                                                    <input id="otp"
                                                           required
                                                           type="text"
                                                           autocomplete="off"
                                                           class="col-sm-12"
                                                           name="otp"
                                                           placeholder="Your verification code">
                                                    <button class="code-btn" type="button" disabled>SEND</button>
                                                </div>
                                                <span class="red">{{ $errors->first('otp')}}</span>
                                            </div>
                                        </div>

                                        {{-- Password --}}
                                        <div class="form-group">
                                            <label class="col-sm-4" for="password">
                                                Password <span class="red">*</span>
                                            </label>

                                            <div class="col-sm-8">
                                                <input type="password"
                                                       required
                                                       id="password"
                                                       autocomplete="off"
                                                       name="password"
                                                       placeholder="Minimum 8 characters of letters and numbers"
                                                       class="col-sm-12">
                                                <br><br>
                                                <span class="red">{{ $errors->first('password')}}</span>
                                            </div>
                                        </div>

                                        {{-- Terms & Conditions --}}
                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <div class="control-group">
                                                    <div class="row">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" class="ace" required>
                                                                <span class="lbl">
                                                                I've read and understood <a href="#" target="_blank">{{ $info->name }}'s Terms & Conditions</a>
                                                            </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-actions" style="display: flex; justify-content: end; padding-left: 0; padding-right: 0">
                                            <button class="btn btn-info" id="submit-login" type="submit">
                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                                Register
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>


<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('assets/js/jquery.mobile.custom.min.js') }}'>" + "<" + "/script>");
</script>

<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>


<!-- inline scripts related to this page -->
<script type="text/javascript">

    //you don't need this, just used for changing background
    jQuery(function ($) {
        $('#btn-login-dark').on('click', function (e) {
            $('body').attr('class', 'login-layout');
            $('#id-text2').attr('class', 'white');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });
        $('#btn-login-light').on('click', function (e) {
            $('body').attr('class', 'login-layout light-login');
            $('#id-text2').attr('class', 'grey');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });
        $('#btn-login-blur').on('click', function (e) {
            $('body').attr('class', 'login-layout blur-login');
            $('#id-text2').attr('class', 'white');
            $('#id-company-text').attr('class', 'light-blue');

            e.preventDefault();
        });

        const otpSendBtn = $('.code-btn');
        const mobilePattern = /^01[0-9]{9}$/;
        $('#mobile').on('input', function (e) {
            const val = $(this).val().toString().trim();
            $(this).val(val);

            if (!mobilePattern.test(val)) {
                if (!$(this).hasClass('form-input-error')) {
                    $(this).addClass('form-input-error');
                    otpSendBtn.attr('disabled', true);
                }
            } else {
                $(this).removeClass('form-input-error');
                otpSendBtn.attr('disabled', false);
            }
        });
        otpSendBtn.click(function () {
            const val = $('#mobile').val().toString().trim();

            $.post('{{route('seller.otp.send')}}',
                {
                    mobile: val,
                },
                function (res) {
                    console.log(res);
                });
        });
    });
</script>

{{-- Sweet Alert--}}
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
<script type="text/javascript">
    @if(session()->get('message'))
    swal.fire({
        title: "Success",
        html: "<b>{{ session()->get('message') }}</b>",
        type: "success",
        timer: 1000
    });
    @elseif(session()->get('error'))
    swal.fire({
        title: "Error",
        html: "<b>{{ session()->get('error') }}</b>",
        type: "error",
        timer: 1000
    });
    @endif

    $('.success').fadeIn('slow').delay(10000).fadeOut('slow');

    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': '{{@csrf_token()}}'}
    });
</script>
</body>

</html>
