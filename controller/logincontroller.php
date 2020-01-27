<?php

include "config.php"; 

// Escape user inputs for security
// $last_name = mysqli_real_escape_string($db, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($db, $_REQUEST['email']);
$password = mysqli_real_escape_string($db, $_REQUEST['password']);
 
// Attempt insert query execution
$sql = "SELECT user_mst.username, role_mst.rolename from user_mst,role_mst,user_role_mapping where user_mst.uid=user_role_mapping.USERID and user_role_mapping.ROLEID=role_mst.roleid and user_mst.email='{$email}' and user_mst.password='{$password}'";

$result = mysqli_query($db,$sql) or die("Bad query $sql");
if($row = mysqli_fetch_assoc($result)){
    // if($result){
        session_start();
 
        $_SESSION["username"] = $row['username'];
        $_SESSION["rolename"] = $row['rolename'];
    header( "location: ../dashboard.php");
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