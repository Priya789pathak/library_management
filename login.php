<?php
session_start();
include("db.php");

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
    header("Location: admin_dashboard.php");
}
else{
    echo "Invalid Login!";
}
?>