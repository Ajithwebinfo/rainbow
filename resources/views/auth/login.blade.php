<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('layouts.header.favicon.favicon')
    @include('layouts.header.title.pagetitles')

    <link href="public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/assets/css/style.css" rel="stylesheet">
    <link href="public/assets/css/colors/blue.css" id="theme" rel="stylesheet">



</head>

<body>
@include('layouts.body.page-loader.loader')




<section id="wrapper">
    <div class="login-register" style="background-image:url(public/assets/images/background/login-register.jpg);">
        <div class="login-box card">
            <div class="card-body">
                {{ Form::open(array('url' => 'handleLogin','class'=>'form-horizontal form-material','id'=>'loginform'))  }}

                <h3 class="box-title m-b-20 text-center">Sign In</h3>
                <div class="form-group ">
                    <div class="col-xs-12">
                        {{ Form::text('username', '', ['id' => 'username','class'=>'form-control p-0 username','placeholder'=>'Username']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control password" id="password" name="password" type="password" required="" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12 font-14">
                        <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox">
                            {{--<label for="checkbox-signup"> Remember me </label>--}}
                            <a href="javascript:void(0)" id="new-user" class="text-dark pull-left text-left"><!-- <i class="fa fa-lock m-r-5"></i> --> New User?</a>
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right text-right" style="padding-left: 160px"><!-- <i class="fa fa-lock m-r-5"></i> --> Forgot Password?</a>

                        </div>
                    </div>
                </div>


                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
                {{--<div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                        <div class="social">
                            <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                            <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                        </div>
                    </div>
                </div>--}}
                {{--<div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <div>Don't have an account? <a href="pages-register.html" class="text-info m-l-5"><b>Sign Up</b></a></div>
                    </div>
                </div>--}}
                {{Form::close()}}
                <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email"> </div>
                    </div>
                    <div class="form-group">
                        <a href="javascript:void(0)" id="to-back-login" class="text-dark pull-right text-right">Already have an account?</a>

                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="public/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="public/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="public/assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="public/assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="public/assets/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="public/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src=/public/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="public/assets/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="public/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>


@section('scripts')
    <script>
        $( document ).ready(function() {

        });

    </script>

@endsection



</body>

</html>
