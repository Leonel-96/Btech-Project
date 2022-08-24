@extends('layouts.customer-nav')
<link rel="stylesheet" type="text/css" href="{{asset('style/css/edit-product.css')}}">
         
       @section('content')
       <div class="content">
        <div class="hd-dash">
            <h1>Posts</h1>
        </div>
        <div class="content-add">
            <div class="product-add-content">
                <div class="prdt-add-content-head">
                    <div><h2>Contact</h2></div>   
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="input-form">
                            <label for="">Email:</label>
                            <input type="email" name="email"class="input-control">
                        </div>   
                    </div>
                    <div class="form-group">
                        <div class="input-form">
                            <label for="">Subject:</label>
                            <input type="text" name="subject" class="input-control">
                        </div>     
                    </div>
                    <div class="form-group" >
                        <div class="input-form">
                          
                          <label for="">Message</label>
                           <textarea name="message" id="" cols="70" rows="10" style="width: 97%"></textarea>
                        </div>   
                    </div>
                   
                    <div class="form-group">
                        <div class="input-btn"><button type="submit" class="btn-add">{{__('Send Message')}}</button></div>
                    </div>
                </form>
            </div>
           </div>
       
    </div>
       @endsection