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

echo '<a href="client.php">Page Clients</a><br/>';
echo '<a href="compte.php">Page Comptes</a><br/>';
echo '<a href="tableau.html">Page Tableau</a><br/>';

$sql = "SELECT ID FROM client";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        echo '<a href="compte.php?user='. $row['ID'] . '">Afficher client ' . $row['ID'] . '</a><br/>';
    }
?>