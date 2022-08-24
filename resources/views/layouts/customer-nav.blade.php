<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>User Dashboard</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('style/css/dashboard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/fontawesome-free-5.14.0-web/css/all.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="{{asset('style/js/script.js')}}"></script>
</head>

<body>
    <div class="container">
        <div class="nav-bar">
            <div class="logo">
                {{-- <img src="{{url('style/img/logo-nca.jpg')}}" alt=""> --}}
                <h1 style="color: #fff;text-align:center;font-size:24px;">User</h1>
            </div>
            <div class="nav-option">
                <div class="">
                    <form action="" method="post">
                        <div class="form-control">
                            <input type="search" name="search" placeholder="Search for.."/>
                        </div>
                        <div class="form-control">
                            <button type="submit"></button>
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </div>
                    </form>
                </div>
                <div class="nav-references">
                    <div><i class="fa fa-bell" aria-hidden="true"></i></div>
                    <div><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="User-profile">
                        <label>{{Auth::user()->name.Auth::user()->firstname}}</label>
                        <div class="img" onclick="show_hide()"><img src="/style/img/{{Auth::user()->avatar}}" alt=""></div>
                        <div class="dropdown-content" id="drpdown-content" style="display: none">
                            <ul>
                           <center> <li style="padding: 10px;height:60px;"><img src="/style/img/{{Auth::user()->avatar}}" alt="" style="border-radius: 50%;width:60px;height:60px;"></li></center>
                           <center style="padding: 3px">
                              <strong> <p style="font-size: 12px">{{Auth::user()->name}}</p></strong>
                           </center>
                                <li><i class="far fa-user" aria-hidden="true"></i><a href="{{url('profile')}}">Profile</a></li>
                              
                                    <li><i class="fa fa-sign-out-alt" aria-hidden="true"></i><a href="{{ route('logout') }}" 
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     {{ __('Logout')}}</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gn-content">
            <div class="side-bar">
                <ul>
                    <li><a href="{{route('user')}}">Dashboard</a><i class="fas fa-tachometer-alt" aria-hidden="true"></i></li>
                    <li><a href="{{route('user.profile')}}">Profile</a><i class="far fa-user-circle" aria-hidden="true"></i></li>
                    <li><a href="{{route('user.orders')}}">Orders</a><i class="fas fa-cart-plus" aria-hidden="true"></i></li>
                    <li><a href="{{route('user.posts')}}">Posts</a><i class="fas fa-tags" aria-hidden="true"></i></li>
                    <li><a>Notifications</a><i class="far fa-bell" aria-hidden="true"></i></li>
                </ul>
            </div>
        @yield('content')
    </div>
</div>
</body>

</html>