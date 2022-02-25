<?php 
ob_start();
 session_start();
 session_destroy();

 header("Location: index.php");
 exit;

ob_clean();
ob_flus();
?>