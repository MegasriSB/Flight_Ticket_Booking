<?php
include 'db.php';
$email = $_REQUEST["rusername"];
$password = $_REQUEST["rpassword"];

try {
    // $host = 'localhost';
    // $dbname = 'airlines';
    // $conn = new PDO("mysql:host=$host;dbname=$dbname","root","Madurai@123");
    $stmt = $conn->prepare("SELECT name FROM reg_user WHERE email = ? AND password = ?");
    $stmt->execute([$email, $password]);
    $result = $stmt->fetch();
    
    if ($result) {
        $name = $result["name"];
        session_start();
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        header("Location: loginsuccess.php");
        exit();
    } else {
        header("Location: login.php");
        exit();
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
