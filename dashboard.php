
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
   <h1> <?php
    session_start();
// Starting session
if(isset($_SESSION["username"])){
echo "Welcome ".$_SESSION['username'].' '.$_SESSION['rolename'];
}
else{
    echo "dashboard not avaliable";
}
    ?></h1>
<a href="addrole.html">Add Role</a>
<br>
<a href="addnews.html">Add News</a>
<br>
<a href="addevent.html">Add Event</a>
<br>
<a href="viewnews.php">view news</a>
<br>
<a href="viewevent.php">view event</a>
<br>
<a href="viewcollege.php">view College</a>
<br>
<a href="viewrole.php">view Role</a>
<br>
<a href="addcollege.html">Add COllege</a>
<br>
<a href="controller\logoutcontroller.php">Log Out</a>

  <h1>kjlhgcf</h1>
</body>
</html>