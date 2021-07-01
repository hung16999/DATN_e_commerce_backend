<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

$conn = new mysqli($servername, $username, $password, $dbname);

$id_account = $_POST['id_account'];
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$role = $_POST['role'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users SET username='$username', password='$password', name='$name', phone='$phone', role='$role' WHERE id_account='$id_account'";

if ($conn->query($sql) === TRUE) {
    echo True;
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
