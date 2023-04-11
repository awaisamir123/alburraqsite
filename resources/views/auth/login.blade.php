@extends('layouts.app')

@section('content')

<div class="container "  >
    <div class="row justify-content-center">



        <div class="col-md-4"  style="margin-top: 20px;background-color: white">

            <div style="text-align: center;margin-top: 30px">
                <img class="img-responsive" src="al-logo-s.png" alt="">
            </div>

            <div style="text-align: center;padding: 20px" class="">
                <div >
                       <h2 class="signin-title-primary">Welcome back! </h2>
                      <h3 class="signin-title-secondary" style="color:#8e8b87 !important ">  Sign in to continue.</h3>
                </div>
            </div>

            <div style="margin: 20px ;color: white;text-align: center"{{-- class="card"--}}>
               {{-- <div class="card-header">{{ __('Login') }}</div>--}}

                <div class="card-body" {{--style="padding: 20px 160px;"--}}>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
{{--
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
--}}

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter Email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
{{--
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
--}}

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-2" style="    margin-left: 94px;">
                                {{--<div class="form-check">
                                    <input class="form-check-input checkboxstyle" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label style="color: black" class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <br>
--}}
                                <div style="display: none" class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" id="remember" checked  {{-- {{ old('remember') ? 'checked' : '' }}--}}>
                                    <label style="color: black" class="custom-control-label" for="customCheck1"> {{ __('Remember Me') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary btn-block ">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a style="margin-top: 30px" class="btn btn-link  "  href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                @if (Route::has('password.request'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<style>

    .signin-title-primary {
        font-weight: 300;
        color: #212529;
    }
    .signin-title-secondary {
        font-weight: 300;
        margin-bottom: 50px;
        color: #8e8b87 !important;
    }
</style>
@endsection
