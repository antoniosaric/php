<?php
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $connection = mysqli_connect('localhost', 'root', '', 'test');

        if ($connection){
            echo "we are connected";
        } else {
            die("database connection fail");
        }

        $query = "INSERT INTO users(username,password) VALUES (''"."'".$username."', '".$password."')";

        $result = mysqli_query($connection, $query);
        if (!$result){
            GLOBAL $query;
            echo $query;
            die("Query failed");
        }

        // if ($username && $password){
        //     echo $username;
        //     echo $password;
        // } else {
        //     echo "This field cannot be blank";
        // }
    }

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
        <form action="login.php" method="POST">
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