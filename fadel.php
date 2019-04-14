<?php
$servername = "localhost";
$username = "mang";
$password = "P!$\$W)RD";
$dbname = "mindcontrol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "DELETE FROM existence WHERE incognito is NOT NULL";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>