@extends('layouts.app')

@section('content')
<!--====== LOGIN PART START ======-->
    
<div id="login-part" class="pt-85 pb-80">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 col-sm-10">
                <div class="login-form text-center">
                    <div class="logo mb-50">
                        <a href="#"><img src="{{ url('public/images/logo-footer.png') }}" alt="Logo"></a>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="singel-form">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter your Full Name...." required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="singel-form">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter your Email...." required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="singel-form">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter your Password...." required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="single-form">
                            <input id="password-confirm" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Enter your Confirm Password...." required 
                            style="width: 100%;
                                    height: 40px;
                                    border: 1px solid #dee1ec;
                                    padding-left: 20px;
                                    border-radius: 5px;
                                    margin-bottom: 20px;
                                    font-size: 14px;
                                    font-family: 'Open Sans', sans-serif;">
                        </div>
                        <div class="singel-form">
                            <input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" placeholder="Enter your PhoneNumber...." required>

                            @if ($errors->has('phone_number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="singel-form">
                            <p>or</p>
                            <ul class="social-loogin pt-15">
                                <li><a href="#"><i class="fa fa-facebook-f"></i>Facebook</a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i>Google</a></li>
                            </ul>
                        </div>
                        <div class="singel-form pt-30">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== LOGIN PART ENDS ======-->
@endsection
