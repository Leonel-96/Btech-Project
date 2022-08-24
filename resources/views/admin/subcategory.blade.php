@extends('layouts.nav')
<link rel="stylesheet" href="{{asset('style/css/product-manager.css')}}">
         
     @section('content')
     <div class="content">
        <div class="hd-dash">
            <h1>Sub Categories</h1>
        </div>
        <div class="h-fruster">
            <div class="fruster">
                <div class="prdt-add-content-head">
                    <div><h2>LIST OF SUB CATEGORIES</h2></div>   
                </div>
                <div class="option-link-head">
                    <div class="option-link">
                        <a href="{{url('/admin/dashboard')}}">{{__('Dashboard')}} / </a>
                        <a href="{{route('subcategory.index')}}">{{__(' List of subcategories')}}</a>
                    </div>
                </div>
                <div class="fruster-add">
                    <div class="title-link">
                        <li class="title-option"><a href="">List</a><i class="fas fa-list"></i></li>
                        <li class="title-option"><a href="{{route('subcategory.create')}}">Add new subcategory</a><i class="fas fa-plus"></i></li>
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
                                <th>Sub-Category Id</th>
                                <th>Sub-Category name</th>
                                <th>Details</th>
                                <th></th>
                            </thead>
                            @foreach ($subcat as $subc)
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>{{$subc->id}}</td>
                                <td>{{$subc->name}} </td>
                                <td style="text-align: left">{{$subc->details}}</td>
                                <td class="event">
                                    <div class="dd-icon">
                                        <i class="fas fa-pen" aria-hidden="true"></i>
                                        <a href="/admin/subcategories/edit-subcategory/{{$subc->id}}" class="btn-warning">Edit</a>
                                    </div>
                                    <div class="dd-icon">
                                        <i class="fas fa-trash" aria-hidden="true"></i>
                                        <a href="/delete/{{$subc->id}}" class="btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <div style="top:1250px;position: absolute; left:53%"> @if ($subcat->hasPages())
                            <div class="pagination-center">
                                {{$subcat->links()}}
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