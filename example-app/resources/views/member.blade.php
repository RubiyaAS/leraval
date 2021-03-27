<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<form action="insert" method="get">
@csrf
<h1> ADD MEMBERS<h1>
<input type ="text" name="member_name" placeholder="username">
@error('username'){{$message}}@enderror</br>
<input type ="text" name="email" placeholder="email">
@error('email'){{$message}}@enderror</br>
<input type="text" name="address" placeholder="address">
@error('password'){{$message}}@enderror</br>
<input type="submit" value="submit">

</form>
</body>
</html>
