<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Welcome to Online Shop</h2>
    <div class="category">
        <select name="category" id="" onchange={handleOnChange(event)}>
            @foreach ($categories as $category)
            <option value={{$category->name}}>{{$category->name}}</option></a>
            @endforeach
        </select>
    </div>

    <div class="search-box">
        <form action="#" method="GET">
<input type="text" name="search" placeholder="Search Something" value="{{request("search")}}">
        </form>
    </div>
</body>
<script>
    const handleOnChange = (event) =>{
        console.log(event.target.value)
    }
</script>
</html>