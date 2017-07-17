<?php include 'db.php';
include 'function.php';

createUser();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Passwordm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="col-sm-6">
      <h1 class="text-center">Create</h1>
        <form action="login_create.php" method="POST">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="submit">
        </form>
      </div>
    </div>
  </body>
</html>