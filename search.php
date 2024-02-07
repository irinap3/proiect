<?php
// Conectare la baza de date (înlocuiește cu informațiile tale de conectare)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nume_baza_de_date";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}

// Preia termenul de căutare din formular
$searchTerm = $_GET['searchTerm'];

// Evită SQL injection folosind instrucțiuni pregătite
$sql = "SELECT * FROM produse WHERE nume LIKE ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

// Afisează rezultatele
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . " Nume: " . $row['nume'] . " Descriere: " . $row['descriere'] . "<br>";
}

// Închide conexiunea
$stmt->close();
$conn->close();
?>
