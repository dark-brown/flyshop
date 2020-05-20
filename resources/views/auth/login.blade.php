@extends('layouts.app')

@section('content')

<!--====== LOGIN PART START ======-->
    
<div id="login-part" class="pt-85 pb-80">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 col-sm-10">
                <div class="login-form text-center">
                    <div class="logo mb-50">
                        <a href="#"><img src="{{ url('public/images/logo-footer.png')}}" alt="Logo"></a>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="singel-form">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter your Email...." required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="singel-form">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Enter your Password...." required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="singel-form">
                            <p>or</p>
                            <ul class="social-loogin">
                                <li><a href="#"><i class="fa fa-facebook-f"></i>Facebook</a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i>Google</a></li>
                            </ul>
                        </div>
                        <div class="singel-form pt-30">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="singel-form pt-25">
                            <ul class="remember">
                                <li>
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember"><span></span>Remember Me</label>
                                </li>
                                <li>
                                    <p>Forgot <a href="{{ route('password.request') }}">password?</a></p>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== LOGIN PART ENDS ======-->
@endsection
