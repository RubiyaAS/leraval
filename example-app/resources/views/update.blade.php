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

<input type ="text" name="member_name" placeholder="username" value="{{$data->member_name}}"><br>

<input type ="text" name="email" placeholder="email" value="{{$data->email}}"> <br>

<input type="text" name="address" placeholder="address" value="{{$data->address}}"><br>

<input type="submit"  name="update" value="update">

</form>
</body>
</html>
