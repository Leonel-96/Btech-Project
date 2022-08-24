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
            <div><h2>EDIT PRODUCT</h2></div>
           
        </div>
        <div class="option-link-head">
            <div class="option-link">
                <a href="{{url('/admin/dashboard')}}">{{__('Dashboard')}} / </a>
                <a href="{{route('category.index')}}">{{__('Categories')}} / </a>
                {{-- <a href="{{route('product.edit')}}">{{__('Edit product')}}</a> --}}
            </div>
        </div>
        <form action="/update-category/{{$cat->id}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
               {{ method_field('PUT')}} 
                <input type="hidden" name="id" value="{{$cat->id}}">   
            <div class="form-group">
                <div class="input-form">
                    <label for="">Category name</label>
                    <input type="text" placeholder="Enter product name" class="input-control" name="name" value="{{$cat->name}}">
                </div>   
            </div>
            <div class="form-group">
                <div class="input-btn"><button type="submit" class="btn-add">Save</button></div>
            </div>
           
    </form> 
    </div>
   </div>
   
</div>
@endsection