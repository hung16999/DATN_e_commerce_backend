<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require 'db_connection.php';

$id_order = $_POST['id_order'];
$id_product = $_POST['id_product'];
$quantity = $_POST['quantity'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO order_detail (id_order, id_product, quantity)
VALUES ('$id_order', '$id_product', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo True;
} else {
    echo $conn->error;
}

$conn->close();
