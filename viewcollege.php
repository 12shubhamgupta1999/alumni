
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
   <h1>
   <?php

include "controller\config.php"; 


$sql = "select collegename,description,email,contact,address from college_mst";
$result = mysqli_query($db,$sql) or die("Bad query $sql");
// echo "Successful";
while($row = mysqli_fetch_assoc($result)){
// echo "{$row['username']} {$row['uid']}";
// }
// if(mysqli_fetch_assoc($result)){
    echo "{$row['collegename']}  {$row['description']} {$row['email']} {$row['contact']} {$row['address']}<br>";
//    echo ' <input type="text" name="cllg" id="cllg" value='{$row['username']}'>';
// } else{
    // echo "cllg list empty";
}
 
// Close connection
mysqli_close($db);
?></h1>

</body>
</html>