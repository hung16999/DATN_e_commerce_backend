<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

require 'db_connection.php';

$id_account = $_POST['id_account'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$name = $_POST['name'];
$phone = $_POST['phone'];

$sql = "INSERT INTO users (id_account, role, username, password, name, phone)
VALUES ('$id_account', '$role', '$username', '$password', '$name', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo TRUE;
} else {
    echo $conn->error;
}

$conn->close();
