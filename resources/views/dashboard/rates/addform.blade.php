<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form action="{{route("rates.store")}}" method="post" enctype="multipart/form-data">
   @csrf
    Rate : <input name="rate" type="number" >
  <br>
  <br>
  <textarea name="reviwe" cols="10" rows="6" ></textarea>
  <input type="submit" value="add" >
  </form>
</body>
</html>
