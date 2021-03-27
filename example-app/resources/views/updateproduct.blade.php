<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<form action="/edit" method="post">

@csrf
<h1> update<h1>
<input type ="hidden" name="id" placeholder="username" value="{{$data->id}}"><br>

<input type ="text" name="productname" placeholder="productname" value="{{$data->productname}}"><br>

<input type ="text" name="price" placeholder="price" value="{{$data->price}}"> <br>

<input type="text" name="quantity" placeholder="quantity" value="{{$data->quantity}}"><br>

<input type="submit"  name="update" value="update">

</form>
</body>
</html>
