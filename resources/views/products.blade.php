@extends('layout')
@section('content')
@include  ('product-header')

@if ($products -> count())
<?php foreach ($products as $product): ?>
<div>
    <x-product-card :product="$product"/>
    {{-- <div class="card">
        <img src="/images/{{$product->title}}.jpg" alt="Book" style="width:10%">
        <div class="container">
            <h1><a href="/products/{{$product->title}}">
                {{$product->title}}</a></h1>
                <p>
                    {{$product->author}}</p>
                    <h3>
                        {{$product->price}} ৳</h3>

                        <h4>Publish by: <a href='publisher/{{$product->publisher->name}}'>{{$product->publisher->name}}</a></h4><h5>Category: <a href="/categories/{{$product->category->name}}"> {{$product->category->name}}</a> </h5>
        </div>
      </div>  --}}

</div>
<?php endforeach; ?> 
@else 
<h3>No products found </h3>
@endif
<x-newcard />
@endsection

    
