@extends('layouts.nav')
    @section('content')
   
    <div class="content">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="hd-dash">
            <h1>Dashboard</h1>
        </div>
        <div class="header-box">
            <div class="box-1">
                <div>
                    <h3>{{__('EARNINGS(MONTHLY)')}}</h3>
                    <h4>250,000 XFA</h4>
                </div>
                <i class="fa fa-calendar" aria-hidden="true"></i>
            </div>
            <div class="box-2">
                <div>
                    <h3>{{__('EARNINGS(ANNUAL)')}}</h3>
                    <h4>2,500,000 XFA</h4>
                </div>
                <i class="fa fa-money-bill" aria-hidden="true"></i>
            </div>
            <div class="box-3">
                <div>
                    <h3>{{__('CUSTOMERS')}}</h3>
                    <h4>150</h4>
                </div>
                <i class="fa fa-users" aria-hidden="true"></i>           
            </div>
           <div class="box-4">
               <div>
                   <h3>{{__('ORDERS REQUESTS')}}</h3>
                   <h4>20</h4>
               </div>
               <i class="fa fa-shopping-cart" aria-hidden="true"></i>
           </div>
        </div>
    </div>
    @endsection
           