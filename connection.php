<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "testdb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo "Connection Done";
}
else
{
    echo "Connection Failed";
}