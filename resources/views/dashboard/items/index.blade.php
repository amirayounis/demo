<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
 <a href="additem">add Item </a>
    <table class="table table-striped">
        <thead>
          <tr>

            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">desc</th>
            <th scope="col">img</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{$item["name"]}}</td>
                <td>{{$item["price"]}}</td>
                <td><img src="storage/imgs/{{$item["img"]}}" width="60 px" ></td>
                <td>{{$item["desc"]}}</td>
                <td><a href="{{route("delete",["id"=>$item["id"]])}}" >delete </a>
                    <a href="{{route("edit",["id"=>$item["id"]])}}" >edit </a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   </body>
</html>
