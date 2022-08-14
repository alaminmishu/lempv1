<?php
// $servername = "localhost";
$servername = "172.18.0.2";
$username = "root";
$password = "secret";
$dbname = "flyphp";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected Successfully \n";
} catch (PDOException $e) {
    echo "Connection Failed! " . $e->getMessage();
}