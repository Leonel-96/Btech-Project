@extends('layouts.nav')
<link rel="stylesheet" type="text/css" href="{{asset('style/css/edit-product.css')}}">
         
       @section('content')
       <div class="content">
        <div class="hd-dash">
            <h1>Products</h1>
        </div>
        <div class="content-add">
            <div class="product-add-content">
                <div class="prdt-add-content-head">
                    <div><h2>ADD PRODUCTS</h2></div>   
                </div>
                <div class="option-link-head">
                    <div class="option-link">
                        <a href="{{url('/admin/dashboard')}}">{{__('Dashboard')}} / </a>
                        <a href="{{route('category.index')}}">{{__('Categories')}} / </a>
                    </div>
                </div>
                <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="input-form">
                            <label for="">Category name</label>
                            <input type="text" name="name" placeholder="Enter product name" class="input-control">
                        </div>   
                    </div>
                    <div class="form-group">
                        <div class="input-btn"><button type="submit" class="btn-add">Submit</button></div>
                    </div>
                </form>
            </div>
           </div>
       
    </div>
       @endsection