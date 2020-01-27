<?php
// Starting session
session_start();
 
// Removing session data
if(isset($_SESSION["username"])){
    unset($_SESSION["username"]);
    unset($_SESSION["rolename"]);
    header( "location: ../logout.html");
    
}
else{
    header( "location: ../index.html");
}
?>