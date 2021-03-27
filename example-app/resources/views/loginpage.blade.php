<html>
<head>
<title></title>
</head>
<body>
<form action="logged" method="get">

<div class="result danger">

<div class="sucess bg-info">

</div>



@if(Session::get('fail'))
<div class="alert.alert-dainger">
{{Session::get('fail')}}
</div>
@endif
</div>
    <input type="text" name="email" placeholder="username"></br>
    @error('email'){{$message}}@enderror</br>
    <input type="password" name="password" placeholder="password"><br>
    @error('password'){{$message}}@enderror</br>
    <input type="submit" value="submit">
    <a href="regg">register</a>
 </form>
</bidy>
</html>