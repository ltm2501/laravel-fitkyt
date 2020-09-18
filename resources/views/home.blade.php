@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 pt-5">
        <img src="/img/logo.jpg" class="rounded-circle" style="height:100px">
    </div>
    <div class="col-9 pt-5">
        <div><h3> subscription page</h3></div>
        <div>
             <h4> {{$user -> username ??'no user found'}}'s profile page </h4>
             <a href="#"> Add new Photo </a>
        </div>
        <div class="d-flex">
            <div class="pr-4"><h5>SHOP</h5></div>
            <div class="pr-4"><h5>PRODUCT RANGE</h5></div>
            <div class="pr-4"><h5>ABOUT US</h5></div>
            <div class="pr-4"><h5>BLOGS</h5></div>
            </div>
            {{-- <div>{{$user->items->description}} </div>
            <div>
            <div><a href={{$user->items->url}}>{{$user->items->url}}</a></div> --}}
    </div>
    <div class="row">
        <div class="col-4 pt-5">
            <img src="https://cdn.shopify.com/s/files/1/0330/0347/0979/products/Addaheading_89_540x.png?v=1597550932" class="rounded w-75">
        </div>
        <div class="col-4 pt-5">
            <img src="https://cdn.shopify.com/s/files/1/0330/0347/0979/products/blackband7_e7ccc4b7-17c3-4240-9fed-f5c2e8283320_540x.png?v=1598258543" class="rounded w-75">
        </div>
        <div class="col-4 pt-5">
            <img src="https://cdn.shopify.com/s/files/1/0330/0347/0979/products/blackband3_135d7883-4fba-4df4-b7f3-a0d31d17aa25_540x.png?v=1598226907" class="rounded w-75">
        </div>
    </div>
   <div class="pt-5" >
        <example-component></example-component>
   </div>
</div>
@endsection
