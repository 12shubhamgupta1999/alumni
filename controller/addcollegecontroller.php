<?php

include "config.php"; 

// Escape user inputs for security
// $last_name = mysqli_real_escape_string($db, $_REQUEST['last_name']);
$cllgname = mysqli_real_escape_string($db, $_REQUEST['cllgname']);
$cllgdesc = mysqli_real_escape_string($db, $_REQUEST['cllgdesc']);
$cllgemail = mysqli_real_escape_string($db, $_REQUEST['cllgemail']);
$cllgphone = mysqli_real_escape_string($db, $_REQUEST['cllgphone']);
$cllgaddress = mysqli_real_escape_string($db, $_REQUEST['cllgaddress']);
 
// Attempt insert query execution
$sql = "insert into college_mst (collegename,description,email,contact,address) values ('{$cllgname}','{$cllgdesc}','{$cllgemail}','{$cllgphone}','{$cllgaddress}')";
// $sql = "inert into user_role_mapping ()";
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