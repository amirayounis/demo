<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



   <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
   @csrf
    Name : <input name="name" type="text" >
    @if (count($errors->get("name"))>0)
    @foreach ($errors->get("name") as $error)
    {{$error}}
    @endforeach
    @endif
  <br>
  Price : <input name="price" type="text" >
  <br>
  Img : <input name="img" type="file" >
  <br>
  <textarea name="desc" cols="10" rows="6" ></textarea>
  <input type="submit" value="add" >
  </form>
</body>
</html>
