<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('style/css/dashboard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/fontawesome-free-5.14.0-web/css/all.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Literata">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://www.position-absolute.com/creation/print/jquery.printPage.js"></script>
    <script src="{{asset('style/js/script.js')}}"></script>
</head>

<body>
    <div class="container">
        <div class="nav-bar">
            <div class="logo">
                <h1 style="font-size:24px;color:#fff;">Admin</h1>
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
                        <label>{{Auth::user()->name}}</label>
                        <div class="img" onclick="show_hide()"><img src="/style/img/{{Auth::user()->avatar}}" alt=""></div>
                        <div class="dropdown-content" id="drpdown-content" style="display: none">
                            <ul>
                           <center> <li style="padding: 10px;height:60px;"><img src="/style/img/{{Auth::user()->avatar}}" alt="" style="border-radius: 50%;width:60px;height:60px;"></li></center>
                           <center style="padding: 3px">
                              <p style="font-size: 12px;color: #1c2326;">{{Auth::user()->name}}</p>
                           </center>
                                <li><i class="far fa-user" aria-hidden="true"></i><a href="{{url('admin/profile')}}">Profile</a></li>
                              
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
                    <li><a href="{{url('/admin/dashboard')}}">Dashboard</a><i class="fas fa-tachometer-alt" aria-hidden="true"></i></li>
                    <li><a href="{{route('admin.profile')}}">Profile</a><i class="far fa-user-circle" aria-hidden="true"></i></li>
                    <li><a href="{{route('admin.orders')}}">Orders</a><i class="fas fa-cart-plus" aria-hidden="true"></i></li>
                    <li><a href="{{url('admin/customers')}}">Customers</a><i class="fas fa-users" aria-hidden="true"></i></li>
                    <li><a href="{{url('admin/categories')}}">Categories</a><i class="fas fa-tags" aria-hidden="true"></i></li>
                    <li><a href="{{url('admin/sub-categories')}}">Sub Categories</a><i class="fas fa-tags" aria-hidden="true"></i></li>
                    <li><a href="{{url('admin/products')}}">Products</a><i class="fas fa-tags" aria-hidden="true"></i></li>
                    <li><a href="{{route('admin.sales')}}">Sales History</a><i class="fas fa-chart-line" aria-hidden="true"></i></li>
                    <li><a href="{{url('admin/posts')}}">Posts</a><i class="far fa-bell" aria-hidden="true"></i></li>
                    <li onclick="show_option()"><a>Products Management</a><i class="fas fa-gift" aria-hidden="true"></i><span class="fas fa-chevron-right" aria-hidden="true"></span>
                       
                    </li>
                     <div class="dropdown-content-sb" id="dropdown-con">
                            <ul>
                                <li><i></i><a href="{{url('add-products')}}">Add products</a></li>
                                <li><i></i><a href="{{url('')}}">Update products</a></li>
                                <li><i class=""></i><a href="">Products views</a></li>
                            </ul>
                        </div>
                </ul>
            </div>
        @yield('content')
    </div>
</div>
</body>

</html>