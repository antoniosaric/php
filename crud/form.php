<?php
  if(isset($_POST['submit'])){
      $name = array("edwin", "mike", "tony", "sam");

      $username = $_POST['username'];


      $password = $_POST['password'];

      if(strlen($username) < 5){
          echo 'username has to be longer than 5';
      }

      if(!in_array($username,$name)){
        echo "sorry you are not allowed";
      } else {
        echo "welcome back";
      }

      // echo $password;
      // echo $username;
  }


?>