<?php // Fetching results one row at a time
require_once 'login.php';
$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die("Fatal Error");

$query = "SELECT * FROM classics";
$result = $connection->query($query);
if (!$result) die("Fatal Error");

$rows = $result->num_rows;

for ($j = 0; $j < $rows; ++$j) {
  $row = $result->fetch_array(MYSQLI_ASSOC);

  echo 'Author: '   . htmlspecialchars($row['category']) . '<br>';
  echo 'Title: '    . htmlspecialchars($row['category']) . '<br>';
  echo 'Category: ' . htmlspecialchars($row['category']) . '<br>';
  echo 'Year: '     . htmlspecialchars($row['category']) . '<br>';
  echo 'ISBN: '     . htmlspecialchars($row['category']) . '<br><br>';
}

$result->close();
$connection->close();
