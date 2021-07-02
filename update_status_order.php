<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

require 'db_connection.php';

$id_order = $_POST['id'];
$id_order_status = $_POST['updateStatus'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE table_order SET id_order_status='$id_order_status' WHERE id_order='$id_order'";

if ($conn->query($sql) === true) {
    echo true;
} else {
    echo $conn->error;
}

$conn->close();
