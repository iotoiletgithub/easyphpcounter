<?php
$servername = "localhost";
$username = "mang";
$password = "P!$\$W)RD";
$dbname = "mindcontrol";
$rngsus = rand(1,99);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "INSERT INTO existence (counter, incognito)
VALUES ('',$rngsus)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>