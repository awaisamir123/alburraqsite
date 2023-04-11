@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 20px">
    <div class="row justify-content-center">
        <div class="col-md-4" style="margin-top: 0px;margin-bottom: 20px;background-color: white">
            <div {{--class="card"--}}>
               {{-- <div class="card-header">{{ __('Reset Password') }}</div>--}}

                <div class="" style="margin-top: 0px;margin-bottom:110px;background-color: white;">
                    @if (session('status'))
                        <div style="margin-top: 10px" class="alert alert-success flash-message" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="text-align: center;margin-top: 40px">
                        <img class="img-responsive" src="/al-logo-s.png" alt="">
                    </div>

                        <div style="padding: 25px;color: rgba(75,75,75,0.65);font-size: 18px">
                            Enter your email address that you used to register. We'll send you an email with your username and a link to reset your password.
                        </div>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div style="padding:0 20px" class="form-group row">
                            {{--<label for="email" class="col-md-12 col-form-label --}}{{--text-md-right--}}{{--">{{ __('E-Mail Address') }}</label>--}}

                            <div class="col-md-12" style="margin-top: 10px;">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Enter Email Address">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div style="margin-bottom: 100px" class="form-group row mb-0" >
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>

                        <div style="text-align: center;margin-top: 20px">
                         <a style="text-align: center" href="/login">Login</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @media (min-width: 768px)  {
        .col-md-4 {
            flex: 0 0 37.333333%;
            max-width: 42.333333% !important;
        }        }
</style>

<script>
    setTimeout(function() {
        $('.flash-message').fadeOut('fast');
    }, 8000);

</script>
@endsection
