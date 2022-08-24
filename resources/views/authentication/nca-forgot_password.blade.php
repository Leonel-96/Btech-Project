@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="{{asset('style/css/login.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('style/css/password-reset.css')}}">
@section('content')
<div>
    <div class="reset-body">
       <form method="POST" action="{{ route('password.email') }}" class="reset">
        @csrf
            <div class="form-option">
                <h2>Reset Password</h2>
            </div>
           <div class="form-option">
               <div>  
                    <input id="email" type="email" class="login-input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    <label for="">Email</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror</div>
                </div>
                <div class="form-option"> 
                    <button type="submit" class="btn-login">
                    {{ __('Send Password Reset Link') }}
                    </button>
                </div>
             </div>
       </form>
    </div>
</div>
    
@endsection