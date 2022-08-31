<?php
$mysqli = new mysqli("localhost","root","", "seminar");
 $mysqli->set_charset('utf8mb4');
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
  $mysqli->set_charset('utf8mb4');
}
?>
