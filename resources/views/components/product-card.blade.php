<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    @props (['product'])
    <div class="card">
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
      </div>
</body>
</html>