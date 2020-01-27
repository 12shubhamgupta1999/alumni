<?php

include "config.php"; 

// Escape user inputs for security
// $last_name = mysqli_real_escape_string($db, $_REQUEST['last_name']);
$username = mysqli_real_escape_string($db, $_REQUEST['username']);
$email = mysqli_real_escape_string($db, $_REQUEST['email']);
$phone = mysqli_real_escape_string($db, $_REQUEST['contact']);
$password = mysqli_real_escape_string($db, $_REQUEST['password']);
$year = mysqli_real_escape_string($db, $_REQUEST['year']);
$branch = mysqli_real_escape_string($db, $_REQUEST['branch']);
$class = mysqli_real_escape_string($db, $_REQUEST['class']);
$degree = mysqli_real_escape_string($db, $_REQUEST['degree']);


// Attempt insert query execution
$sql = "insert into user_mst (username,email,contact,password) values ('{$username}','{$email}','{$phone}','{$password}')";
$sql1 = "insert into user_role_mapping (userid,roleid) values((select uid from user_mst where username='{$username}'),(select roleid from role_mst where rolename='alumni'))";
$sql2 = "insert into alumni_mst (alumniid,year,branch,class,degree) values ((select user_mst.uid from user_mst where username='{$username}'),'{$year}','{$branch}','{$class}','{$degree}')";
// $sql = "inert into user_role_mapping ()";    
$result = mysqli_query($db,$sql) or die("Bad query $sql");
$result1 = mysqli_query($db,$sql1) or die("Bad query $sql1");
$result2 = mysqli_query($db,$sql2) or die("Bad query $sql2");
if($result){
    if($result1){
        if($result2){
    echo "Records added successfully.";
    // session_start();
    
    // if(isset($_SESSION["username"])){
    header( "location: ../index.html");
    // }
    // exit;
    // }
    // else{
        
        // }
        echo "Record successfully  {$row['username']}";
    } } }else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
    }

 
// Close connection
mysqli_close($db);
?>