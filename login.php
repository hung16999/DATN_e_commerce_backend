<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

require 'db_connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$user = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

$resultUser = mysqli_fetch_all($user, MYSQLI_ASSOC);
echo json_encode($resultUser, JSON_NUMERIC_CHECK);

$conn->close();
