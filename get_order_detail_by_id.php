<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require 'db_connection.php';

$id_customer = $_POST['id_customer'];

$sql = "SELECT table_order.id_order, order_detail.id_product, order_detail.quantity, product.name, product.price, product.discount FROM table_order, order_detail, product WHERE table_order.id_customer = '$id_customer' AND table_order.id_order=order_detail.id_order AND order_detail.id_product = product.id";

$orderDetail = mysqli_query($conn, $sql);

$list = mysqli_fetch_all($orderDetail, MYSQLI_ASSOC);
echo json_encode($list, JSON_NUMERIC_CHECK);

$conn->close();
