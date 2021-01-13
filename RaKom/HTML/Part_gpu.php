<?php
function tablegpu(){
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

if(FALSE === $conn->query("SELECT 1 from gpu;")){
    echo("This table doesn't exist");
    $sql = "CREATE TABLE gpu (
        gpu_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        gpu_name VARCHAR(50) NOT NULL,
        gpu_chip VARCHAR(50) NOT NULL,
        gpu_memory VARCHAR(50) NOT NULL,
        gpu_clock VARCHAR(50) NOT NULL,
        gpu_price VARCHAR(50) NOT NULL
    )";
    if ($conn->query($sql) === TRUE) {
    echo "Table gpu created successfully";
    if ($conn->query("INSERT INTO gpu (gpu_name, gpu_chip, gpu_memory,gpu_clock,gpu_price) VALUES ('Zotac pro' , '1060 6gb', '6 GB', '1441 MHz', 'Rp 4.000.000')") === TRUE) {
        echo "New gpu created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    if ($conn->query("INSERT INTO gpu (gpu_name, gpu_chip, gpu_memory,gpu_clock,gpu_price) VALUES ('MSI Founder ' , '5500 XT', '8 GB', '1500 MHz', ' 5.000.000')") === TRUE) {
        echo "New gpu created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    } else {
    echo "Error creating table: " . $conn->error;
    }
}
$sql = "SELECT * FROM gpu;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<tr><th>Nama gpu</th><th>ChipSet</th><th>Memory</th><th>Clock</th><th>Price</th></tr>";
        while($row = $result->fetch_assoc()) {
        echo "<tr><th>" . $row["gpu_name"]. "</th><th>" . $row["gpu_chip"]. "</th><th>". $row["gpu_memory"]. "</th><th>". $row["gpu_clock"]. "</th><th>". $row["gpu_price"]. "</th></tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Tabel</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">-->
  </head>
  <style>
    
    * { margin: 0; padding: 0; }
    html , body { width:100%; height:100%; }
    canvas { display: block;}
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
    padding: 10px;
    }
  </style>
  <style>
    body {
      background-image: url("/RaKom/image/ComputerBack.jpg");
      background-size: 100% 100%;
    }
    footer {
      background-color: #777;
      padding: 10px;
      text-align: center;
      color: white;
    }
    .navul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333333;
    }
    
    .navli {
      float: left;
    }
    
    .navli a {
      display: block;
      color: white;
      text-align: center;
      padding: 16px;
      text-decoration: none;
    }
    
    .navli a:hover {
      background-color: #111111;
    }
    table{
      background-color: #bfbfbf;
    }
    .column {
      float: left;
      padding: 10px;
    }

    .column.side {
      width: 15%;
    }

    .column.middle {
      width: 70%;
    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    @media screen and (max-width: 600px) {
      .column.side, .column.middle {
      width: 100%;
      }
    }
  </style>
  <body>
    <nav> 
      <a href="/RaKom/HTML/Home.html"> 
        <img src="/RaKom/image/Logo.jpg" alt="Logo"style="width:228px;height:128px;float: left" > 
      </a>
      <h1 style="font-size:700%;text-align: center;text-align: middle;"><strong>Rakit Komputer</strong></h1>
      <br>
        <ul class = "navul">
          <li class = "navli"><a href="/RaKom/HTML/Home.html">Home</a></li>
          <li class = "navli"><a href="/RaKom/HTML/Part.html">Part</a></li>
          <li class = "navli" style='float: right'><a href="/RaKom/HTML/Login.html">Login</a></li>
          <li class = "navli" style='float: right'><a href="/RaKom/HTML/Register.html">Sign in</a></li>
          <li class = "navli"><a href="/RaKom/HTML/About.html">About</a></li>
        </ul>
      <hr>
    </nav>
    <div class="row">
      <section class="column side" style=padding-left:1em;>
          <br>
          <h3> Bagian Komputer</h3>
          <br>
        <dl style=padding-left:1em;>
        <li><a href="/RaKom/HTML/Part_motherboard.php">MotherBoard</a></li>
          <li><a href="/RaKom/HTML/Part_cpu.php">CPU</a></li>
          <li><a href="/RaKom/HTML/Part_gpu.php">GPU</a></li>
          <li><a href="/RaKom/HTML/Part_memory.php">Memory</a></li>
          <li><a href="/RaKom/HTML/Part_psu.php">PSU</a></li>
        </dl>   
          
      </section>
      <article class="column middle"> 
        <table style="width:80%">
          <caption>Game</caption>
          <?php tablegpu();?>
          </table>
      </article>
    </div>
    <aside></aside>
    <footer>

      <h4 style="text-align: center">
        2020
      </h4>
    </footer>
  </body>
</html>
 