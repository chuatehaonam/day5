<?php
session_start(); 
include_once(__DIR__ . '/../../dbconnect.php');


$con = connectDB();
$username = $_POST['username'];
$password = $_POST['password'];  

$stmt = $con->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();
if ($result && $result->num_rows > 0) {
    $user = $result->fetch_assoc();
    header("Location: /demoshop/frontend/index.php");
    $_SESSION['username'] = $user['username']; 
    exit();
} else {
    header("Location: login.php"); 
    exit();
}

$con->close();
?>
