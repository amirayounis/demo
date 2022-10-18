<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 {{-- {{dd($data)}} --}}

   <form action="{{route('update',["id"=>$data["id"]])}}" method="post" enctype="multipart/form-data">
   @csrf
    Name : <input name="name" type="text"  value="{{$data['name']}}">
  <br>
  Price : <input name="price" type="text" >
  <br>
  Img : <input name="img" type="file" >
  <br>
  <textarea name="desc" cols="10" rows="6" >{{$data['desc']}}</textarea>
  <input type="submit" value="add" >
  </form>
</body>
</html>
