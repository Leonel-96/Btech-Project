@extends('layouts.nav')
<link rel="stylesheet" href="{{asset('style/css/product-manager.css')}}">
         
     @section('content')
     <div class="content">
        <div class="hd-dash">
            <h1>Categories</h1>
        </div>
        <div class="h-fruster">
            <div class="fruster">
                <div class="prdt-add-content-head">
                    <div><h2>LIST OF CATEGORIESS</h2></div>   
                </div>
                <div class="option-link-head">
                    <div class="option-link">
                        <a href="{{url('/admin/dashboard')}}">{{__('Dashboard')}} / </a>
                        <a href="{{route('category.index')}}">{{__(' List of categories')}}</a>
                    </div>
                </div>
                <div class="fruster-add">
                    <div class="title-link">
                        <li class="title-option"><a href="">List</a><i class="fas fa-list"></i></li>
                        <li class="title-option"><a href="{{route('category.create')}}">Add new category</a><i class="fas fa-plus"></i></li>
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
                                <th>Categories Id</th>
                                <th>Categories name</th>
                                <th></th>
                            </thead>
                            @foreach ($cat as $c)
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>{{$c->id}}</td>
                                <td>{{$c->name}} </td>
                                <td class="event">
                                    <div class="dd-icon">
                                        <i class="fas fa-pen" aria-hidden="true"></i>
                                        <a href="/admin/categories/edit-category/{{$c->id}}" class="btn-warning">Edit</a>
                                    </div>
                                    <div class="dd-icon">
                                        <i class="fas fa-trash" aria-hidden="true"></i>
                                        <a href="/delete/{{$c->id}}" class="btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <div style="top:1250px;position: absolute; left:53%"> @if ($cat->hasPages())
                            <div class="pagination-center">
                                {{$cat->links()}}
                            </div>
                        @endif</div>
                    </form>
                </div>
            </div>
        </div>
       <span style="text-align: center; font-size: 11px; font-family: helvetica,sans-serif;padding-top: 30px;"> &copy; copyright by Leonel Sidjou</span>
    </div> 
    <script src="{{elixir('js/app.js')}}"></script>
     @endsection