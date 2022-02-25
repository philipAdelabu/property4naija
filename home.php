<?php 
session_start();
 if(!isset($_SESSION['login']) || $_SESSION['login'] != 1){
 	unset($_SESSION['login']);
 	session_destroy();
   header("Location : index.php");
   exit;
 }

?>
<h3>
	
	  Welcome to the Home page.

</h3>

<br />

<form action="logout.php" method="post">
	<input type="submit" value="logout">
</form>



