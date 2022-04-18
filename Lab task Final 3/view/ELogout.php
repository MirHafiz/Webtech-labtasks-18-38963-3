<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 

    setcookie('usernamecookie','',time()-86400);
    setcookie('passwordcookie','',time()-86400);
// Destroy the session.
session_destroy();

 
// Redirect to login page
header("location: ELogin.php");
exit;
?>