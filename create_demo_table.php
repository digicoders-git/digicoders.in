<?php
$conn = new mysqli('localhost', 'root', '', 'digicoders');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS software_demo_requests (
 id INT PRIMARY KEY AUTO_INCREMENT,
 software_id INT NULL,
 software_name VARCHAR(255),
 name VARCHAR(150),
 mobile VARCHAR(20),
 email VARCHAR(150),
 message TEXT,
 status ENUM('Pending','Contacted') DEFAULT 'Pending',
 created_at DATETIME
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

if ($conn->query($sql) === TRUE) {
    echo "Table software_demo_requests created successfully.\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

$conn->close();
?>
