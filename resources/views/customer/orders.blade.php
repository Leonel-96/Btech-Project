@extends('layouts.customer-nav')
<link rel="stylesheet" href="{{asset('style/css/product-manager.css')}}">
         
     @section('content')
     <div class="content">
        <div class="hd-dash">
            <h1>Orders</h1>
        </div>
        <div class="h-fruster">
            <div class="fruster">
                <div class="prdt-add-content-head">
                    <div><h2>ORDERS</h2></div>   
                </div>
                <div class="option-link-head">
                    <div class="option-link">
                        <a href="{{url('/customer/dashboard')}}">{{__('Dashboard')}} / </a>
                    </div>
                </div>
                <div class="fruster-add">
                    <div class="title-link">
                        <li class="title-option"><a href="">List</a><i class="fas fa-list"></i></li>
                        <li class="title-option"><a href="">Export</a><i class="fas fa-share-square"></i></li>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="success-message" onclick="close()" id="close">
                            <p>{{$message}}</p>
                        </div>
                        @endif
                </div>
                <div class="fruster-table">
                    <form action="">
                    </form>
                </div>
            </div>
        </div>
       <span style="text-align: center; font-size: 11px; font-family: helvetica,sans-serif;padding-top: 30px;"> &copy; copyright by Leonel Sidjou</span>
    </div> 
    <script src="{{elixir('js/app.js')}}"></script>
     @endsection