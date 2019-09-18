<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestioncompte";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nom = $_POST['nom'];
$dn = $_POST['dn'];

$SQL="insert into client values(0, '$nom','$dn')";
echo $SQL;
//insert into client values(0,"karim","1992-01-01");
$conn->query($SQL);

$conn->close();
?>