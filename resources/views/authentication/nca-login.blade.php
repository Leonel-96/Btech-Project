<link rel="stylesheet" type="text/css" href="{{asset('style/css/login.css')}}">
@extends('layouts.master')
 @section('content')
            <div class="middle-representation">

                <div class="login-board">
                    <div class="login-section">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-option">
                                <h2>Login</h2>
                            </div>
                            <div class="form-option">
                                <div>
                                    <input class="login-input @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                    <label>E-mail</label>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="lg-passIcon">
                                    <input class="login-input @error('password') is-invalid @enderror"  id="password" type="password"name="password" required autocomplete="current-password"/>
                                    <label>Password</label>
                                    <i class="fa fa-eye-slash" aria-hidden="true"></i>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                            <div style=" width:80%;margin-bottom: 18px;padding-top: 15px;display:flex;justify-content:space-between">
                              <div>  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><label for="remember">Remember me</label></div>


                               <div style="padding-top:10px;"> @if (Route::has('password.request'))
                                <a class="btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a></div>
                            @endif
                            </div>
                            <div class="form-option">
                                <div class="lgIcon">
                                    <button class="btn-login" type="submit">LOGIN</button>
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="lgIcon">
                                    <button class="btn-login" style="background: midnightblue"><a href="login/facebook">LOGIN WITH FACEBOOK</a></button>
                                    <i class="fab fa-facebook-square fa-lg" aria-hidden="true"></i>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="login-section" style="border-left: 1px solid lightgrey;">
                        <div class="form-option">
                            <h2>Create an account</h2>
                        </div>
                        <div class="form-option" style="margin:30px 0px 110px 0px;">
                            <p>Create your account customer in form-groupust a few clicks ! You can register either using your e-mail address or through you Facebook account. </p>
                        </div>
                        <div class="form-option" style="align-items: center">
                            <div class="lgIcon">
                                <button class="btn-login" href=""><a href="{{route('register')}}">CREATE AN ACCOUNT VIA EMAIL</a></button>
                                <i class="fa fa-envelope fa-lg" aria-hidden="true"></i>
                            </div>

                            <div class="lgIcon">
                                <button class="btn-login" href="login/facebook" style="background: midnightblue"><a href="register.html">REGISTER WITH FACEBOOK</a></button>
                                <i class="fab fa-facebook-square fa-lg" aria-hidden="true"></i>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!--Begin of the footer section-->
            @endsection
    
    