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
    @include('layouts.header.css.styles')


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
                                <input class="form-control password" id="password" type="password" required="" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 font-14">
                                <div class="checkbox checkbox-primary pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox">
                                    {{--<label for="checkbox-signup"> Remember me </label>--}}
                                </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right text-right"><!-- <i class="fa fa-lock m-r-5"></i> --> Forgot Password?</a> </div>
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

    @include('layouts.footer.js.scripts')

    @section('scripts')
        <script>
            $( document ).ready(function() {

            });

        </script>

    @endsection



</body>

</html>