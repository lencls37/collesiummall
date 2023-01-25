<?php


$host = 'localhost';
$dbname = 'collesiummall';
$username = 'root';
$password = '';

try {
    global $conn;
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Veritabanı Bağlantı hatası: " . $e->getMessage();
}


$stmt = $conn->prepare("SELECT * FROM magazalar");
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$magazalar = $stmt->fetchAll();

echo $magazalar[0]['magaza_adi'];

print_r( $magazalar);
