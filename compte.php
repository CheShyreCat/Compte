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

$user = $_GET['user'];

$sql = "SELECT ID, Numcompte, Solde, IDclient FROM compte where IDclient=" . $user;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " ID : " . $row["ID"]. " - Numéro de compte : " . $row["Numcompte"]. " - Solde : " . $row["Solde"]. " € - ID client : " . $row["IDclient"]."<br>";
        }
} else {
    echo "0 results";
}
$conn->close();
?>