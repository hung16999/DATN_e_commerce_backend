<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require 'db_connection.php';

$products = mysqli_query($db_conn, "SELECT * FROM `product`");

if (mysqli_num_rows($products) > 0) {
    $productsList = mysqli_fetch_all($products, MYSQLI_ASSOC);
    echo json_encode($productsList, JSON_NUMERIC_CHECK);
} else {
    echo json_encode(["success" => 0]);
}
