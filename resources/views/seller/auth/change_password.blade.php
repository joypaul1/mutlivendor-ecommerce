<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>Reset Password | {{ $info->name }} </title>

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

        .form-input-error {
            border: 1px solid red !important;
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
    </style>

</head>

<body class="login-layout light-login">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-md-12 ">
                <div class="login-container login-width-new">
                    <div class="left">
                        <h1>
                            <span class="white text-left" style="color: #403b3b!important;font-size: 20px"
                                  id="id-text2">&nbsp;</span>
                        </h1>
                    </div>

                    <div class="space-12"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border"
                             style="width: 600px; margin: auto">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger text-center">
                                        <i class="ace-icon glyphicon glyphicon-user"></i>
                                        Reset Password
                                    </h4>

                                    <div class="space-6"></div>
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form class="form-horizontal"
                                          role="form"
                                          action="{{ route('seller.login.update-password') }}"
                                          method="POST">
                                        @csrf

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
                                                New Password <span class="red">*</span>
                                            </label>

                                            <div class="col-sm-8">
                                                <input type="password"
                                                       required
                                                       id="password"
                                                       name="password"
                                                       placeholder="Minimum 8 characters of letters and numbers"
                                                       class="col-sm-12">
                                                <br><br>
                                                <span class="red">{{ $errors->first('password')}}</span>
                                            </div>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-actions" style="display: flex; justify-content: space-between; padding-left: 0; padding-right: 0">
                                            <a href="{{route('seller.login.form')}}">Sign in</a>
                                            <button class="btn btn-info" id="submit-login" type="submit">
                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                                Update Password
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
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
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
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': '{{@csrf_token()}}'}
    });

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
</script>
</body>

</html>
