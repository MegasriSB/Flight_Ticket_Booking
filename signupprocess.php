<?php
include 'db.php';
$name = $_REQUEST["rname"];
$email = $_REQUEST["rusername"];
$phone = $_REQUEST["rphone"];
$password = $_REQUEST["rpassword"];

try {
    // $host = 'localhost';
    // $dbname = 'airlines';
    // $conn = new PDO("mysql:host=$host;dbname=$dbname","root","Madurai@123");
    $stmt = $conn->prepare("INSERT INTO reg_user(name, email, phone, password) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $email, $phone, $password]);
    header("Location: login.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
