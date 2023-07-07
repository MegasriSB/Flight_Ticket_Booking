<?php
include 'db.php';
$adminemail = $_REQUEST["rusername"];
$password = $_REQUEST["rpassword"];

try {
    $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ? AND password = ?");
    $stmt->bindParam(1, $adminemail);
    $stmt->bindParam(2, $password);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) > 0) {
        session_start();
        $_SESSION["adminemail"] = $adminemail;
        header("Location: adminloginsuccess.php");
        exit;
    } else {
        header("Location: adminlogin.php");
        exit;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
