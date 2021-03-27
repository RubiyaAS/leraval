<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="style.css">
    
</head>
<style>
.error{
    color:red;
}
</style>



<body>
<h1>REGISTRATION</h1>
<form action="register" method="get">
@csrf
<div class="result danger">
@if(Session::get('sucess'))
<div class="sucess bg-info">
{{Session::get('sucess')}}
</div>
@endif


@if(Session::get('fail'))
<div class="alert.alert-dainger">
{{Session::get('fail')}}
</div>
@endif
</div>
<div class="form-group">
<span class="error">
<label for="exampleInputName"></label>
    <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp"  name="fullname" placeholder="fullname" value="{{ old('fullname') }}"><br><br>
    @error('fullname'){{$message}}@enderror</br>
    </div></span>
    <div class="form-group">
    <span class="error">
    <label for="exampleInputEmail1"></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="email"><br><br>
    @error('email'){{$message}}@enderror</br>
    </div></span>
    <div class="form-group">
    <span class="error">
    <label for="exampleInputPass"></label>
    <input type="password" class="form-control" id="exampleInputPass" aria-describedby="emailHelp" name="password" placeholder="password"><br><br>
    @error('password'){{$message}}@enderror</br>
    </div></span>
    <input type="submit" value="register">
    
    <a href="login">login</a>
 </form>
</bidy>
</html>