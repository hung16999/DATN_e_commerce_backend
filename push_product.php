<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

require 'db_connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$type = $_POST['type'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$remains = $_POST['remains'];
$src = $_POST['src'];

$sql = "INSERT INTO product (id, name, type, price, discount, remains, src)
VALUES ('$id', '$name', '$type', '$price', '$discount', '$remains', '$src')";

if ($conn->query($sql) === TRUE) {
    echo TRUE;
} else {
    echo $conn->error;
}

$conn->close();
