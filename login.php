<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require 'db_connection.php';

$users = mysqli_query($db_conn, "SELECT * FROM `users`");

if (mysqli_num_rows($users) > 0) {
    $usersList = mysqli_fetch_all($users, MYSQLI_ASSOC);
    echo json_encode($usersList, JSON_NUMERIC_CHECK);
} else {
    echo json_encode(["success" => 0]);
}
