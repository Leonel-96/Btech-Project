@extends('layouts.nav')
<link rel="stylesheet" href="{{asset('style/css/product-manager.css')}}">
         
     @section('content')
     <div class="content">
        <div class="hd-dash">
            <h1>Customers</h1>
        </div>
        <div class="h-fruster">
            <div class="fruster">
                <div class="prdt-add-content-head">
                    <div><h2>LIST OF CUSTOMERS</h2></div>   
                </div>
                <div class="option-link-head">
                    <div class="option-link">
                        <a href="{{url('/admin/dashboard')}}">{{__('Dashboard')}} / </a>
                        <a href="{{route('product.index')}}">{{__(' List of Customers')}}</a>
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
                        <table class="product-view">
                            <thead>
                                <th style="width: 20px">#</th>
                                <th>Products_Id</th>
                                <th>Customer name</th>
                                <th>Images</th>
                                <th>Telephone</th>
                                <th>Address</th>
                                <th>Created Date</th>
                            </thead>
                           
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align: left"></td>
                                <td></td>
                            </tr>
                          
                        </table>
                        <div style="top:1320px;position: absolute; left:50%"> 
                            <div class="pagination-center">
                                
                            </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>
       <span style="text-align: center; font-size: 11px; font-family: helvetica,sans-serif;padding-top: 30px;"> &copy; copyright by Leonel Sidjou</span>
    </div> 
    <script src="{{elixir('js/app.js')}}"></script>
     @endsection