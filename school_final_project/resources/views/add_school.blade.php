

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <form action="add" method="POST">
        @csrf
    <div class="container">
        <h1 class="text-center">Enter School Detail's</h1>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">address</label>
            <input type="text" name="address" class="form-control" placeholder="" aria-describedby="helpId">
        </div> <div class="form-group">
            <label for="">city</label>
            <input type="text" name="city" class="form-control" placeholder="" aria-describedby="helpId">
        </div> <div class="form-group">
            <label for="">state</label>
            <input type="text" name="state" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">contact number</label>
            <input type="number" name="contact" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">School image</label>
            <input type="text" name="images" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">E-mail</label>
            <input type="email" name="mail" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <button type="submit" class="btn btn-primary">  
            submit
        </button>
    </div>
    </form>
</body>
</html>