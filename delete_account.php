<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

$conn = new mysqli($servername, $username, $password, $dbname);

$id_account = $_POST['id_account'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM users WHERE id_account='$id_account'";

if ($conn->query($sql) === TRUE) {
    echo True;
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
