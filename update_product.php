<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

require 'db_connection.php';

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

if ($conn->query($sql) === true) {
    echo true;
} else {
    echo $conn->error;
}

$conn->close();
