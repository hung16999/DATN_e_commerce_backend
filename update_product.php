<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

$conn = new mysqli($servername, $username, $password, $dbname);

$id = $_POST['id'];
$name = $_POST['name'];
$src = $_POST['src'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$remains = $_POST['remains'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE product SET name='$name', src='$src', price='$price', discount='$discount', remains='$remains' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo True;
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
