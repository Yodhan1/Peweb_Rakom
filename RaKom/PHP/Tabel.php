<?php
function tablepsu(){
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

    if(FALSE === $conn->query("SELECT 1 from psu;")){
        echo("This table doesn't exist");
        $sql = "CREATE TABLE psu (
            psu_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            psu_name VARCHAR(50) NOT NULL,
            psu_form VARCHAR(50) NOT NULL,
            psu_mod VARCHAR(50) NOT NULL,
            psu_watt VARCHAR(50) NOT NULL,
            psu_price VARCHAR(50) NOT NULL
        )";
        if ($conn->query($sql) === TRUE) {
        echo "Table psu created successfully";
        if ($conn->query("INSERT INTO psu (psu_name, psu_form, psu_mod,psu_watt,psu_price) VALUES ('Corsair' , 'ATX', 'Semi', '850 W', 'Rp 2.000.000')") === TRUE) {
            echo "New psu created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        if ($conn->query("INSERT INTO psu (psu_name, psu_form, psu_mod,psu_watt,psu_price) VALUES ('FTX ' , 'Mini-ATX', 'Full', '650 W', ' 1.000.000')") === TRUE) {
            echo "New psu created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        } else {
        echo "Error creating table: " . $conn->error;
        }
    }   
$sql = "SELECT * FROM psu;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<tr><th>Nama psuory</th><th>Form Factor</th><th>Modular</th><th>Wattage</th><th>Price</th></tr>";
        while($row = $result->fetch_assoc()) {
        echo "<tr><th>" . $row["psu_name"]. "</th><th>" . $row["psu_form"]. "</th><th>". $row["psu_mod"]. "</th><th>". $row["psu_watt"]. "</th><th>". $row["psu_price"]. "</th></tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
?>