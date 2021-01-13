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
if(FALSE === $conn->query("SELECT 1 from user;")){
  echo("This table doesn't exist");
  $sql = "CREATE TABLE user (
    u_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    u_nick VARCHAR(50) NOT NULL,
    u_pass VARCHAR(50) NOT NULL,
    u_email VARCHAR(50) NOT NULL,
    u_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if ($conn->query($sql) === TRUE) {
      echo "Table User created successfully";
      if ($conn->query("INSERT INTO user (u_nick, u_pass, u_email) VALUES ('admin' , md5('admin'), 'admin@admin.com')") === TRUE) {
        echo "New admin created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    } else {
      echo "Error creating table: " . $conn->error;
    }
}
$stmt = $conn->prepare("INSERT INTO user (u_nick, u_pass, u_email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $user, $pass, $email);

$user = $_POST["Uname"];
$pass = $_POST["Pass"];
$pass= md5($pass);
$email = $_POST["Uemail"];

if ($stmt->execute() === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<body>

    Berhasil menambahkan id
    <button type="button" ><a href="/RaKom/PHP/Home.PHP">kembali ke laman</a> </button>
</body>
</html>
