<?php 
  $connection = mysqli_connect('localhost', 'root', '', 'test');

  if (!$connection){
      die("database connection fail");
  }

?>