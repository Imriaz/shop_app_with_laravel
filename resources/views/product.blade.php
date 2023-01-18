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
    <div class="card">
        <img src="/images/{{$product->title}}.jpg" alt="Book" style="width:10%">
        <div class="container">
            <h1>
                {{$product->title}}</h1>
                <p>
                    {{$product->author}}</p>
                    <h3>
                        {{$product->price}} ৳</h3>
        </div>
      </div> 
   {{-- <?= $product; ?> --}}

      <a href="/">Back to the homepage</a>
    
</body>
</html>