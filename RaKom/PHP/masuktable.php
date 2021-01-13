<?php
$servername = "localhost";
$username = "rakom";
$password = "rakom";
$dbname = "rakom";

$form   = $_POST["intothe"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($form == "cpu"){
    if(FALSE === $conn->query("SELECT 1 from cpu;")){
        echo("This table doesn't exist");
        $sql = "CREATE TABLE cpu (
            cpu_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            cpu_name VARCHAR(50) NOT NULL,
            cpu_core VARCHAR(50) NOT NULL,
            cpu_clock VARCHAR(50) NOT NULL,
            cpu_tpd VARCHAR(50) NOT NULL,
            cpu_price VARCHAR(50) NOT NULL
        )";
        if ($conn->query($sql) === TRUE) {
        echo "Table cpu created successfully";
        if ($conn->query("INSERT INTO cpu (cpu_name, cpu_core, cpu_clock,cpu_tpd,cpu_price) VALUES ('intel 5' , '6', '3.6', '70 Watt', 'RP 5.000.000')") === TRUE) {
            echo "New cpu created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        if ($conn->query("INSERT INTO cpu (cpu_name, cpu_core, cpu_clock,cpu_tpd,cpu_price) VALUES ('ryzen 7' , '8', '3.2', '55 Watt', 'RP 4.000.000')") === TRUE) {
            echo "New cpu created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        } else {
        echo "Error creating table: " . $conn->error;
        }
    }
    $stmt = $conn->prepare("INSERT INTO cpu (cpu_name, cpu_core, cpu_clock,cpu_tpd,cpu_price) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $no1, $no2, $no3, $no4, $no5);
    
}   
if($form == "gpu"){
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
    $stmt = $conn->prepare("INSERT INTO gpu (gpu_name, gpu_chip, gpu_memory,gpu_clock,gpu_price) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $no1, $no2, $no3, $no4, $no5);
}
if($form == "mb"){
    if(FALSE === $conn->query("SELECT 1 from mb;")){
        echo("This table doesn't exist");
        $sql = "CREATE TABLE mb (
            mb_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            mb_name VARCHAR(50) NOT NULL,
            mb_cpu VARCHAR(50) NOT NULL,
            mb_form VARCHAR(50) NOT NULL,
            mb_slot VARCHAR(50) NOT NULL,
            mb_price VARCHAR(50) NOT NULL
        )";
        if ($conn->query($sql) === TRUE) {
        echo "Table motherboard created successfully";
        if ($conn->query("INSERT INTO mb (mb_name, mb_cpu, mb_form,mb_slot,mb_price) VALUES ('Asus TUF' , 'AM4', 'ATX ', '4', 'Rp 1.000.000')") === TRUE) {
            echo "New mb created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        if ($conn->query("INSERT INTO mb (mb_name, mb_cpu, mb_form,mb_slot,mb_price) VALUES ('MSI B250M ' , 'Lga 1151', 'Mini Atx', '2', ' 2.000.000')") === TRUE) {
            echo "New mb created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        } else {
        echo "Error creating table: " . $conn->error;
        }
    }
    $stmt = $conn->prepare("INSERT INTO mb (mb_name, mb_cpu, mb_form,mb_slot,mb_price) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $no1, $no2, $no3, $no4, $no5);
}
if($form == "mem"){
    if(FALSE === $conn->query("SELECT 1 from mem;")){
        echo("This table doesn't exist");
        $sql = "CREATE TABLE mem (
            mem_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            mem_name VARCHAR(50) NOT NULL,
            mem_speed VARCHAR(50) NOT NULL,
            mem_module VARCHAR(50) NOT NULL,
            mem_color VARCHAR(50) NOT NULL,
            mem_price VARCHAR(50) NOT NULL
        )";
        if ($conn->query($sql) === TRUE) {
        echo "Table memory created successfully";
        if ($conn->query("INSERT INTO mem (mem_name, mem_speed, mem_module,mem_color,mem_price) VALUES ('Team T-Force' , 'DDR4-3200', '2*8 GB', 'Red', 'Rp 1.000.000')") === TRUE) {
            echo "New mem created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        if ($conn->query("INSERT INTO mem (mem_name, mem_speed, mem_module,mem_color,mem_price) VALUES ('Corsair Vengaeance ' , 'DDR3-2400', '2*8 GB', 'Black', ' 500.000')") === TRUE) {
            echo "New mem created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        } else {
        echo "Error creating table: " . $conn->error;
        }
    }
    $stmt = $conn->prepare("INSERT INTO mem (mem_name, mem_speed, mem_module,mem_color,mem_price) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $no1, $no2, $no3, $no4, $no5);
}
if($form == "psu"){
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
    $stmt = $conn->prepare("INSERT INTO psu (psu_name, psu_form, psu_mod,psu_watt,psu_price) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $no1, $no2, $no3, $no4, $no5);
}

$no1    = $_POST["no1"];
$no2    = $_POST["no2"];
$no3    = $_POST["no3"];
$no4    = $_POST["no4"];
$no5    = $_POST["no5"];


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

    Berhasil menambah Item
    <button type="button" ><a href="/RaKom/PHP/Part.PHP">kembali ke part</a> </button>
</body>
</html>
