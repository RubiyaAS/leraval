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
<td>productname</td>
<td>price</td>
<td>quantity</td>
<td>Action</td>
<td colspan="2">action</td>
</tr>
@foreach($data as $item)
<tr>
<td>{{$item['id']}}</td>
<td>{{$item['productname']}}</td>
<td>{{$item['price']}}</td>
<td>{{$item['quantity']}}</td>

<td><a href="{{"delete/".$item['id']}}">delete</a></td>
<td><a href="{{"update/".$item['id']}}">update</a></td>


</tr>
@endforeach
</table>
</body>
</html>
