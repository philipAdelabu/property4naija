<?php

  session_start();

  
   $username = 'root'; $password = ''; $database = 'property4naija';
   $db = new mysqli('localhost', $username, $password, $database);


   $username = $_POST['username']; $password = $_POST['password'];

   $password = sha1($password);

 $query = "select * from users where username = '".$username."' and password = '".$password."'"; 

   $result = $db->query($query);

    $row = $result->num_rows;
  
    if($row > 0){
       $_SESSION['login'] = 1; 
      header("Location: home.php");
      exit;
    }else{
    	 $_SESSION['login'] = 0; 
      header("Location: index.php");
      exit;
    }

?>