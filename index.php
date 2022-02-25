 <?php 
  session_start();
  ?>
<html>


  <h2> Login </h2>
<form action="login.php" method="post" >
    Username: <input type="text" name="username" /><br />
    Password: <input type="password" name="password" /><br />
    <input type="submit" value="Submit" />
</form>

<br />
<br />
 <?php 

     if(isset($_SESSION['register'])){ 
       echo $_SESSION['register'];
       unset($_SESSION['register']);
     }

 ?>

<h2>Registeration</h2>
<form action="register.php" method="post" >
    Username: <input type="text" name="username" /><br />
    Password: <input type="password" name="password" /><br />

    <input type="submit" value="Register" />
</form>





</html>