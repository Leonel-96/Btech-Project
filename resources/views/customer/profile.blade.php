@extends('layouts.customer-nav')
<link rel="stylesheet" type="text/css" href="{{asset('style/css/profile.css')}}">
@section('content')
<div class="content">
    <div class="hd-dash">
        <h1>Profile</h1>
    </div>
    <div class="profile-justify">
        <div class="profile-info">
            <div class="section-lft">
                <div class="gn-info">
                    <div class="img-profile">
                        <img src="/style/img/{{Auth::user()->avatar}}">
                    </div>
                    <div>
                        <h2 style="font-weight: bold;font-size: 16px">{{Auth::user()->firstname}}{{Auth::user()->name}}</h2>
                    </div>
                    <div>
                        <h2>Status:<b>Connected</b></h2>
                    </div>
                    <div>
                        <h2>{{Auth::user()->email}}</h2>
                    </div>
                </div>
            </div>
            <div class="section-rgt">
                <div class="hd-profile">
                    <h3>Edit your profile</h3>
                </div>
                <form action="{{route('user.edit')}}" method="post">
                    {{ csrf_field() }}
                    @if ($message = Session::get('success'))
                    <div class="success-message" onclick="close()" id="close">
                        <p>{{$message}}</p>
                    </div>
                    @endif
                    <div class="profile-module">
                        <div class="form-group">
                            <label>Firstname</label>
                            <input class="form-struct" type="text" name="firstname" value="{{Auth::user()->firstname}}">
                        </div>
                    </div>
                    <div class="profile-module">
                        <div class="form-group">
                            <label>Lastname</label>
                            <input class="form-struct" type="text" name="lastname" value="{{Auth::user()->lastname}}">
                        </div>
                    </div>
                    <div class="profile-module">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-struct" type="email" name="email" value="{{Auth::user()->email}}">
                        </div>
                    </div>
                    <div class="profile-module">
                        <div class="form-group">
                            <label>Phone number</label>
                            <input class="form-struct" type="tel" name="telephone" value="{{Auth::user()->telephone}}">
                        </div>
                    </div>
                    <div class="profile-module">
                        <div class="form-group">
                            <label>Address</label>
                            <input class="form-struct" type="text" name="address" value="{{Auth::user()->address}}">
                        </div>
                    </div>
                    <div class="footer-profile">
                        <button class="btn-profile" type="submit">Save Profile</button>
                    </div>
               
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
          
       