<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yakadb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");
$sql = "SELECT id, `type`, text FROM sposob";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - type " . $row["type"]. " " . $row["text"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();