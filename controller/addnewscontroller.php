<?php

include "config.php"; 

// Escape user inputs for security
// $last_name = mysqli_real_escape_string($db, $_REQUEST['last_name']);
$newsname = mysqli_real_escape_string($db, $_REQUEST['newsname']);
$newsdesc = mysqli_real_escape_string($db, $_REQUEST['newsdesc']);
$newsdate = mysqli_real_escape_string($db, $_REQUEST['newsdate']);
 
// Attempt insert query execution
$sql = "insert into news_mst (newsname,description,newsdate) values ('{$newsname}','{$newsdesc}','{$newsdate}')";
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