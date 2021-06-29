<?php

$servername  =  "localhost";
$username = "Maan";
$password = "123456";
$dbname = "robotengine";
$a=1;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT EngineID, Value  FROM roboticengine";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> EngineID ". $row["EngineID"]. "  Value: ". $row["Value"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Status  FROM status";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Engines Status =  ". $row["Status"].  "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

 ?>
