<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

require 'db_connection.php';

$id_order = $_POST['id_order'];
$id_customer = $_POST['id_customer'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$id_order_status = $_POST['id_order_status'];
$create_date = $_POST['create_date'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO table_order
(id_order, id_customer, phone, address, id_order_status, create_date)
VALUES ('$id_order', '$id_customer', '$phone', '$address', '$id_order_status', '$create_date')";

if ($conn->query($sql) === true) {
    echo true;
} else {
    echo $conn->error;
}

$conn->close();
