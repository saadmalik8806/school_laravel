<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <h1>School List</h1>
<table class="table table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">name</th>
      <th scope="col">address</th>
      <th scope="col">city</th>
      <th scope="col">state</th>
      <th scope="col">contact</th>
      <th scope="col">images</th>
      <th scope="col">mail</th>

    </tr>
  </thead>
  @foreach($detail as $detail)

  <tbody>
    <tr>
      <!-- <th scope="row">{{$detail['id']}}</th> -->
      <td>{{$detail['name']}}</td>
      <td>{{$detail['address']}}</td>
      <td>{{$detail['city']}}</td>
      <td>{{$detail['state']}}</td>
      <td>{{$detail['contact']}}</td>
      <td>{{$detail['images']}}</td>
      <td>{{$detail['mail']}}</td>

    </tr>
    
  </tbody>
  @endforeach
</table>


</body>
</html>

