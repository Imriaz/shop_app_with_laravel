@extends('layout')
@section('content')
<?php foreach ($products as $product): ?>
<div>
    <div class="card">
        <img src="/images/{{$product->title}}.jpg" alt="Book" style="width:10%">
        <div class="container">
            <h1><a href="/products/{{$product->title}}">
                {{$product->title}}</a></h1>
                <p>
                    {{$product->author}}</p>
                    <h3>
                        {{$product->price}} ৳</h3>
        </div>
      </div> 
    
    {{-- <?= $product; ?> --}}
</div>
<?php endforeach; ?> 
@endsection

    
