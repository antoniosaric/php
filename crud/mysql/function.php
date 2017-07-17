<?php include 'db.php';

//create user

function createUser(){
if(isset($_POST['submit'])){
  global $connection;
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO users(username, password) VALUES ( '$username', '$password')";

        $result = mysqli_query($connection, $query);
        if ($result){
            echo "user created";
        } else {
            die("Query failed" . mysqli_error($connection));
        }

    }
  }
}




// show data
function showAllData(){
    global $connection;

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);
    if ($result){
        
    } else {
        die("Query failed" . mysqli_error($connection));
    }


    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='".$id."'>".$id."</option>";
    }
}

//update

function updateTable(){
  if(isset($_POST['submit'])){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = ".$id." ";

    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query failed" . mysqli_error($connection));
    } else {
        echo 'record updated';
    }
  }
}

function deleteUser(){
  if(isset($_POST['submit'])){  
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = ".$id." ";

    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query failed" . mysqli_error($connection));
    } else {
        echo 'Record Deleted';
    }
  }
}

function read(){
  global $connection;
  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);
  if ($result){
      
  } else {
      die("Query failed" . mysqli_error($connection));
  }

  while($row = mysqli_fetch_assoc($result)) {
      print_r($row);
  }
}

?>