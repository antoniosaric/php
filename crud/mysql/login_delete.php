<?php include 'db.php';
include 'function.php';

?>
<?php
  if(isset($_POST['submit'])){
    deleteUser();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="col-sm-6">
        <form action="login_delete.php" method="POST">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <select name="id" id="">
                <?php
                    showAllData();
                ?>

                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Delete">
        </form>

      </div>
    </div>
  </body>
</html>