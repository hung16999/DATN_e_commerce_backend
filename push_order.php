<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

$conn = new mysqli($servername, $username, $password, $dbname);

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
(id_order, id_customer, id_salesman, id_shipper, phone, address, id_order_status, create_date)
VALUES ('$id_order', '$id_customer', 'sale2', 'ship1', '$phone', '$address', '$id_order_status', '$create_date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
