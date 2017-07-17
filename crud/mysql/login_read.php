<?php
        $connection = mysqli_connect('localhost', 'root', '', 'test');

        if ($connection){
            echo "we are connected";
        } else {
            die("database connection fail");
        }

        $query = "SELECT * FROM users";

        $result = mysqli_query($connection, $query);
        if ($result){
            
        } else {
            die("Query failed" . mysqli_error($connection));
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

    <?php

    while($row = mysqli_fetch_assoc($result)) {

    ?>

    <pre>

    <?php
        print_r($row);
    ?>
    </pre>
    <?php
    }

    ?>

      </div>
    </div>
  </body>
</html>