<?php
$servername = "localhost";
$username = "rakom";
$password = "rakom";
$dbname = "rakom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$user_id = $_POST["Uname"];
$user_pass = $_POST["Pass"];
$user_pass = md5($user_pass);
$cek = "SELECT * FROM user WHERE u_nick = '$user_id' and u_pass = '$user_pass'";

$result = $conn->query($cek);
if ($result->num_rows > 0) {
  echo "Login successfully";
  session_start();
	$_SESSION['username'] = $user_id;
  $_SESSION['status'] = "login";
  $conn->close();
  header("location:Home.php");
} else {
  echo "Login Error : " . $conn->error;
  $cek = "SELECT * FROM user WHERE u_nick = '$user_id'";
  $result = $conn->query($cek);
  if ($result->num_rows > 0) {
    echo "Wrong Password";
  } else {
    echo "Wrong Id";
  }
  $conn->close();
  sleep(1);
  header("location:/RaKom/HTML/Login.html");
}

?>