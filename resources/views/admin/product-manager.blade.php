@extends('layouts.nav')
<link rel="stylesheet" href="{{asset('style/css/product-manager.css')}}">
 
     @section('content')
     <div class="content">
        <div class="hd-dash">
            <h1>Products</h1>
        </div>
        <div class="h-fruster">
            <div class="fruster">
                <div class="prdt-add-content-head">
                    <div><h2>LIST OF PRODUCTS</h2></div>   
                </div>
                <div class="option-link-head">
                    <div class="option-link">
                        <a href="{{url('/admin/dashboard')}}">{{__('Dashboard')}} / </a>
                        <a href="{{route('product.index')}}">{{__(' List of product')}}</a>
                    </div>
                </div>
                <div class="fruster-add">
                    <div class="title-link">
                        <li class="title-option"><a href="">List</a><i class="fas fa-list"></i></li>
                        <li class="title-option"><a href="{{route('product.create')}}">Add new product</a><i class="fas fa-plus"></i></li>
                        <li class="title-option"><a href="{{URL::to('printPreview')}}" class="btnPrint">Export</a><i class="fas fa-share-square"></i></li>
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
                                <th>Products name</th>
                                <th>Images</th>
                                <th>Categories</th>
                                <th>Details</th>
                                <th>Unit Price</th>
                                <th></th>
                            </thead>
                            @foreach ($product as $pro)
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>{{$pro->id}}</td>
                                <td>{{$pro->name}} </td>
                                <td><img src="{{URL::to($pro->image)}}"></td>
                                <td>{{$pro->cat_id}}</td>
                                <td style="text-align: left">{{$pro->details}}</td>
                                <td>{{$pro->price}} FCFA</td>
                                <td class="event">
                                    <div class="dd-icon">
                                        <i class="fas fa-pen" aria-hidden="true"></i>
                                        <a href="/admin/products/edit-product/{{$pro->id}}" class="btn-warning">Edit</a>
                                    </div>
                                    <div class="dd-icon">
                                        <i class="fas fa-trash" aria-hidden="true"></i>
                                        <a href="/delete/{{$pro->id}}" class="btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <div style="top:1250px;position: absolute; left:53%"> @if ($product->hasPages())
                            <div class="pagination-center">
                                {{$product->links()}}
                            </div>
                        @endif</div>
                    </form>
                </div>
            </div>
        </div>
       <span style="text-align: center; font-size: 11px; font-family: helvetica,sans-serif;padding-top: 30px;"> &copy; copyright by Leonel Sidjou</span>
    </div> 
            <script type="text/javascript">
                $(document).ready(function(){
                    $('.btnPrint').printPage();
                });
            </script>
    <script src="{{elixir('js/app.js')}}"></script>
    
     @endsection