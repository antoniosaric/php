

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
  $x = 0;
  ?>
  <h1><?php include 'dynamic_text.php';
      echo "$title";
  ?></h1>


  <?php
    $counter = 0;
    while($counter <= 10){
      echo $counter . "<br>";
      $counter++; 
    }
    echo "<br>" . $x . "<br>";

  ?>

  <?php
    for ($counter = 0; $counter < 10; $counter++){
      echo $counter . "<br>";
    }

  ?>

  <?php
  function apples($name){
    global $x;
    echo "<h3> APPLES " . $name . "</h3>";
    $x = 1;
    echo "<br>" . $x . "<br>";

  }
  apples("Tony");
  ?>

  <?php 
    define("NAME", "BOB");
    print NAME;
    echo "<br>";
    echo rand(1,100);
    echo "<br>";
    echo ceil(4.6);
    echo "<br>";
    echo floor(4.6);
  ?>

    <form action="form.php" method="post">
      <input type="text" name="username" placeholder="Enter Username">
      <input type="password" name="password" placeholder="Enter Password">
      <br>
      <input type="submit" name="submit">
    </form>


</body>
</html>