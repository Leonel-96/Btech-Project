@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="{{asset('style/css/login.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('style/css/password-reset.css')}}">
@section('content')
<div>
    <div class="reset-body">
       <form method="POST" action="{{ route('password.update') }}" class="reset">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-option">
                <h2>{{ __('Reset Password') }}</h2>
            </div>
          
           <div class="form-option">
               <div>
                   
                    <input id="email" type="email" class="login-input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    <label for="">Email</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div >
                   
                    <input id="password" type="password" class="login-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <label for="">Password</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    
                    <input id="password-confirm" type="password" class="login-input" name="password_confirmation" required autocomplete="new-password">
                    <label for="">Confirm Password</label>
                </div>
                <div class="form-option"> 
                    <button type="submit" class="btn-login">
                        {{ __('Reset Password') }}
                    </button>
                </div>
             </div>
       </form>
    </div>
</div>
@endsection