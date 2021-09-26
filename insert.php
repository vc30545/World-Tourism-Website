<?php
ob_start();
include('connection.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = "insert into login(username,password) values('$username',' $password')";
$test = mysqli_query($conn,$query);
if($test){
	header('location:http://localhost/ip%20project/Login.html');
    echo "inserted";
}
else{
	header('location:http://localhost/ip%20project/Login.html');
    echo "database not insrted";
} 
ob_end_flush();   
?>