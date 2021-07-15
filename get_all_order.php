<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require 'db_connection.php';

$sql = "SELECT table_order.id_order, users.role,
users.name, table_order.phone, table_order.address,
table_order.id_order_status, table_order.create_date
FROM users, table_order
WHERE table_order.id_customer = users.id_account
ORDER BY table_order.create_date;";

$orders = mysqli_query($conn, $sql);

$ordersList = mysqli_fetch_all($orders, MYSQLI_ASSOC);
echo json_encode($ordersList, JSON_NUMERIC_CHECK);
