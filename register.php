<?php
 
 session_start();
  


   $username = 'root'; $password = ''; $database = 'property4naija';
   $db = new mysqli('localhost', $username, $password, $database);
 
   if (mysqli_connect_errno()) {
       echo 'Could not connect to database. Please try again later.'; exit;
         }
  
  $username = $_POST['username']; $password = $_POST['password'];



   $password = sha1($password);

    $query = "select * from users where username = '".$username."' "; 

   $result = $db->query($query);
    if($result->num_rows > 0){
      $_SESSION['register'] = "<b>The username already exist</b>";
      header("Location: index.php");
      exit;
    }

   $query = "insert into users (username, password) values('".$username."', '".$password."')";


   $result = $db->query($query);
    if($result){
      $_SESSION['register'] = "<b>The registration was successfull</b>";
      header("Location: index.php");
      exit;
    }else{
      echo 'Error ';
      exit;
    }


?>