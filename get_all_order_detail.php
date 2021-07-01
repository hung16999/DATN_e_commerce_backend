<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require 'db_connection.php';

$sql = "SELECT order_detail.id_order, order_detail.id_product,
order_detail.quantity, product.name, product.price, product.discount, product.src
FROM product, order_detail WHERE product.id = order_detail.id_product;";

$orders = mysqli_query($conn, $sql);

if (mysqli_num_rows($orders) > 0) {
    $ordersList = mysqli_fetch_all($orders, MYSQLI_ASSOC);
    echo json_encode($ordersList, JSON_NUMERIC_CHECK);
} else {
    echo json_encode(["success" => 0]);
}
