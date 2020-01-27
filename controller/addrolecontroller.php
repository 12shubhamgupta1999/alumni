<?php

include "config.php"; 

// Escape user inputs for security
// $last_name = mysqli_real_escape_string($db, $_REQUEST['last_name']);
$rolename = mysqli_real_escape_string($db, $_REQUEST['rolename']);
$roledesc = mysqli_real_escape_string($db, $_REQUEST['roledesc']);
$rights = mysqli_real_escape_string($db, $_REQUEST['rights']);
 
// Attempt insert query execution
$sql = "insert into role_mst (rolename,description) values ('{$rolename}','{$roledesc}')";

$result = mysqli_query($db,$sql) or die("Bad query $sql");
if($result){
    echo "Records added successfully.";
    session_start();
    
    if(isset($_SESSION["username"])){
    header( "location: ../dashboard.php");
    }
    // exit;
    // }
    // else{
        
        // }
        echo "Record successfully  {$row['username']}";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
    }

 
// Close connection
mysqli_close($db);
?>