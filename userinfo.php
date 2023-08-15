<?php

// Set connection variable
$server = "localhost";
$username = "root";
$password = "root";

// Create a database connection
$con = mysqli_connect($server, $username, $password);

// check for connection success  
if(!$con){
    die("connection to this database failed due to" .mysqli_connect_error());
}
echo "Success connecting to the db";

// connect to the database
mysqli_select_db($con, 'websitesuserdata');

// collect the post variable
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];
$query = "INSERT INTO userinfodata (user, email, mobile, comment)
VALUES('$user', '$email', '$mobile', '$comment ')";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');

?>