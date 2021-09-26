<?php
ob_start();
include('connection.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query="select * from login where username='$username' && password='$password'";
$check=mysqli_query($conn,$query);

$num=mysqli_num_rows($check);
if($num==1){
	header('location:http://localhost/ip%20project/index.html');
}
else{
	header('location:http://localhost/ip%20project/login.html');
}
ob_end_flush();
?>