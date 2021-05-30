<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "dbfip";

// Creare la connessione
$conn = new mysqli($servername, $username, $password, $db);

// Verifica della connessione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
