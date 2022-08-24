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
                <a href="{{route('product.index')}}">{{__('Products')}} / </a>
                {{-- <a href="{{route('product.edit')}}">{{__('Edit product')}}</a> --}}
            </div>
        </div>
        <form action="/update-subcategory/{{$subcat->id}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
               {{ method_field('PUT')}} 
                <input type="hidden" name="id" value="{{$subcat->id}}">
                <div class="form-group">
                    <div class="input-form">
                        <label for="">Subcategory name</label>
                        <input type="text" name="name" placeholder="Enter product name" class="input-control" value="{{$subcat->name}}">
                    </div>   
                </div>   
            <div class="form-group" >
                <div class="input-form">
                    <label for="">Category</label>
                    <select name="cat_id" id="" class="input-control">
                        @foreach ($cat as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>
                </div> 
            </div>
            <div class="form-group" >
                <div class="input-form">
                  
                  <label for="">Details</label>
                   <textarea name="details" id="" cols="70" rows="10" value="{{$subcat->details}}" style="width: 97%">{{$subcat->details}}
                    </textarea>
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