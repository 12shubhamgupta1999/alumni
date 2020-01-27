<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="controller\addrolecontroller.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Role Name</label>
    <input type="text" name="rolename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Role Desc</label>
    <input type="text" name="roledesc" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Rights</label>
    <input type="text" name="rights" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>