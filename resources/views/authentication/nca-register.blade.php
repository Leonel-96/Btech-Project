@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="{{asset('style/css/register.css')}}">
@section('content')
<div class="middle-representation">
    <div class="register-board">

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="register-header">
                <h2>Create Account</h2>
            </div>
            <div class="register-option">
                <div>
                    <input class="input-register @error('firstname') is-invalid @enderror" id="firstname" type="text" name="firstname" required autocomplete="firstname"/>
                    <label>Firstname</label>
                        @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <div>
                    <input class="input-register" id="lastname" type="text" name="lastname"  required autocomplete="lastname"/>
                    <label>Lastname</label>

                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div class="register-option">
                <div>
                    <input class="input-register @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                    <label>E-mail Address</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="passIcon">
                    <input class="input-register  @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="new-password"/>
                    <label>Password</label>
                    <i class="fa fa-eye-slash fa-lg" aria-hidden="true"></i>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
            </div>
            <div class="register-option">
                <div class="passIcon">
                    <input class="input-register  @error('password') is-invalid @enderror" id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password"/>
                    <label>Confirm-password</label>
                    <i class="fa fa-eye-slash fa-lg" aria-hidden="true"></i>
                </div>



                <div>
                    <input class="input-register" type="tel" name="telephone" required=""/>
                    <label>Phone number (optional)</label>
                </div>
            </div>
            <div class="register-option">
                <div>
                    <input class="input-register @error('address') is-invalid @enderror" id="address" type="text" name="address" required autocomplete="address"/>
                    <label>Address</label>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div>
                <div class="rgt-checK">
                    <input type="checkbox" id="condition-1" name="" value=""/><label for="condition-1">I want to receive NCA Newsletter with the best deals and offers.</label>
                </div>
            </div>
            <div>
                <div>
                    <button class="btn-register" type="submit">CREATE ACCOUNT</button>
                </div>
                <div class="rgt-Icon">
                    <button class="btn-register" type="submit" style="background: midnightblue; text-transform: uppercase">CREATE ACCOUNT WITH FACEBBOK</button>
                    <i class="fab fa-facebook-square fa-lg"></i>
                </div>
            </div>
            <div class="register-footer">
                <div class="footer-option">
                    <p>Already have an account ?</p>
                </div>
                <div class="footer-option">
                    <a href="{{route('login')}}">LOGIN</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection