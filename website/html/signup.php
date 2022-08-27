<?php
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['pass'];

//database connection

$conn = new mysqli('localhost', 'root', '' . 'login');

if ($conn->connect_error) {
    die('connection failed :' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration (username,email,adress,password values (?,?,?,?))");
    $stmt->bind_param("ssss", $username, $email, $address, $password);
    $stmt->execute();
    echo "resistration successfully ";
    $stmt->close();
    $conn->close();
}
