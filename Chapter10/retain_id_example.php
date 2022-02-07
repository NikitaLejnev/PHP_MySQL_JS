// Using insertID to retain it for storing
<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

$query = "INSERT INTO cats VALUES(NULL, 'Lynx', 'Stumpy', 5)";
$result = $conn->query($query);
$insertID = $conn->insert_id;

$query = "INSERT INTO owners VALUES($insertID, 'Ann', 'Smith')";
$result = $conn->query($query);
