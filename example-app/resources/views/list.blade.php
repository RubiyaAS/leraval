<html>
<head>
<title></title>
</head>
<style>
table,td,tr{border:1px solid;}
</style>
<body>
<table>
<tr>
<td>id</td>
<td>member_name</td>
<td>email</td>
<td>address</td>
<td colspan="2">action</td>
</tr>
@foreach($data as $item)
<tr>
<td>{{$item['id']}}</td>
<td>{{$item['member_name']}}</td>
<td>{{$item['email']}}</td>
<td>{{$item['address']}}</td>

<td><a href="{{"delete/".$item['id']}}">delete</a></td>
<td><a href="{{"update/".$item['id']}}">update</a></td>


</tr>
@endforeach
</table>
</body>
</html>

