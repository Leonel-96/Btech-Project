<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title></title>
</head>
<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{asset('style/fontawesome-free-5.14.0-web/css/all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('style/css/simpleSlider.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('style/css/index.css')}}">
<link rel="icon" href="{{asset('style/img/logo-nca.jpg')}}">
<script src="{{asset('style/js/script.js')}}"></script>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<body>
    <div class="container">
        <div class="header">
            <div class="pub-zone"></div>
            <div class="lang"></div>
            <div class="navigation">
                <div class="logo-section">
                    <img src="{{url('style/img/logo-nca.jpg')}}" alt="">
                </div>
                <div class="search-section">
                    <form action="">
                        <div class="search-icon">
                            <input type="text" placeholder="Search products, brands and categories" class="form-control"/>
                            <i class="fa fa-search"></i>
                        </div>
                        <button type="submit" class="btn-search">SEARCH</button>
                    </form>
                </div>
                <div class="nav-section">
                    <ul>
                        <li class="nav-icon" onclick="show_hide()">
                            <a>Login</a>
                            <i class="far fa-user" aria-hidden="true"></i>
                            <span class="fas fa-angle-down" aria-hidden="true"></span>
                        </li>
                        <div class="dropdown-cont" id="drpdown-content">
                            <ul>
                                <li class="log-section"><a href="{{route('login')}}">Login</a></li>
                                <li class="account-section"><a href="{{route('register')}}">CREATE ACCOUNT</a><i class="fa fa-"></i></li>
                                <li class="drop-icon"><a href="">Account</a><i class="fas fa-user"></i></li>
                                <li class="drop-icon"><a href="">Orders</a><i class="fa fa-shopping-basket"></i></li>
                                <li class="drop-icon"><a href="">Saved Items</a><i class="far fa-heart"></i></li>
                            </ul>
                        </div>
                        <li class="nav-icon" onclick="show_hide1()">
                            <a>Help</a>
                            <i class="far fa-question-circle" aria-hidden="true"></i>
                            <span class="fas fa-angle-down" aria-hidden="true"></span></li>
                        <div class="drop" id="drpdown-cont">
                            <ul>
                                <li><a href="">Help Center</a></li>
                                <li><a href="">How to shop on NCA</a></li>
                                <li><a href="">How to pay on NCA</a></li>
                                <li><a href="">How to use a voucher</a></li>
                                <li><a href="">Delivery timelines and fees</a></li>
                                <li><a href="">NCA Express</a></li>
                                <li><a href="">NCA Pickup Station</a></li>
                                <li><a href="">Returns and Refunds</a></li>
                                <li><a href="">Product rating and reviews</a></li>
                                <li><a href="">Contact us</a></li>
                            </ul>
                        </div>
                        <li class="nav-icon"><a href="{{url('cart')}}">Cart</a><sup class="sup">3</sup><i class="fa fa-cart-plus" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>
        </div>
@yield('content')

        <div class="footer">
            <div class="footer-top">
                <div class="footer-content-tp">
                    <div class="text-display">
                        <div>
                            <h2>NEW TO NCA ?</h2>
                        </div>
                        <div>
                            <p>Subscribe to our newsletter to get updates on our lastest offers!</p>
                        </div>
                    </div>
                    <div>
                        <form>
                            <div>
                                <input class="input-form" type="email" name="email" placeholder="Enter E-mail Address"/>
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div>
                                <input class="btn-form" type="submit" name="male" value="MALE"/>
                            </div>
                            <div>
                                <input class="btn-form" type="submit" name="male" value="FEMALE"/>
                            </div>
                        </form>
        
                    </div>
                </div>
            </div>
            <div class="footer-bottom"></div>
        </div>
        <!--Footer end-->
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{asset('bootstrap-4.0.0-dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('style/js/jquery-3.4.1.min.js')}}">
       
        </body>
        </html>