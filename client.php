<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestioncompte";

echo "test devops";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Nom, Datedenaissance FROM client";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " ID : " . $row["ID"]. " - Date de naissance : " . $row["Datedenaissance"]. " - Nom : " . $row["Nom"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>