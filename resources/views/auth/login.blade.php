@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8" id="form">
            <div class="card">
                <div class="card-header" style="font-weight: bold; font-size: 14px" >{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="font-weight: bold; color: black">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class=" col-md-4 col-form-label text-md-right" style="font-weight: bold; color: black">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback"  style="color: transparent" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="font-weight: bold; color: black">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary font-weight-bold" id="login">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a id="btn" class="btn btn-link font-weight-bold" style="border: 1px solid red;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
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

body{
    height: 100vh;
    width: 100%;
    background: linear-gradient(-45deg, #EE7752, #E73C4e, #23A6D5, #23D5AB);
}
div.card{
    background-color: rgba(0, 0, 0, 0.2);
}
#form{
    position: relative;
}

#login{
    background-color: transparent;
    color: #ffffff;
}
#login:hover{
    opacity: 0.5;
    color: rgb(12, 12, 12);
    background-color: rgba(29, 255, 0, 0.91);
    font-weight: bold;

}
.form-control{
    background: transparent;
}
input#email.form-control{
    background: transparent;
}
#btn{
    color: black;
    background-color: rgba(0, 0, 0, 0.13);
}
#btn:hover{
    background-color: rgba(241, 129, 129, 0.35);
}
</style>
