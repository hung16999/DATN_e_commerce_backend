<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require 'db_connection.php';

$id_customer = $_POST['id_customer'];

$products = mysqli_query($conn, "SELECT * FROM table_order WHERE `id_customer`= '$id_customer'");

$productsList = mysqli_fetch_all($products, MYSQLI_ASSOC);
echo json_encode($productsList, JSON_NUMERIC_CHECK);

$conn->close();
