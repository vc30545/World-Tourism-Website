
 <?php
$servername = "localhost";
$user = "root";
$pass = "root";
$dbname = "vishal";


try{
$conn = new mysqli($servername, $user, $pass, $dbname);
} catch (Exception $e) {
  echo $e->errorMessage();
}
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
 mysqli_select_db( $conn,$dbname);
}
try{
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO  contact(name,email,message) 
VALUES ('$name', '$email','$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
catch (Exception $f) {
  echo $f->errorMessage();
}

$conn->close();
?>

