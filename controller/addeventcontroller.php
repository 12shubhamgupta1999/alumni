<?php

include "config.php"; 

// Escape user inputs for security
// $last_name = mysqli_real_escape_string($db, $_REQUEST['last_name']);
$eventname = mysqli_real_escape_string($db, $_REQUEST['eventname']);
$eventdesc = mysqli_real_escape_string($db, $_REQUEST['eventdesc']);
$eventdate = mysqli_real_escape_string($db, $_REQUEST['eventdate']);
 
// Attempt insert query execution
$sql = "insert into event_mst (eventname,description,eventdate) values ('{$eventname}','{$eventdesc}','{$eventdate}')";
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