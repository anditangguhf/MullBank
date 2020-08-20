<?php
$serv = "localhost";
$unm = "";
$pwd = "";
$db_name = "id14307394_mullbank";
$conn = new mysqli($serv, $unm, $pwd, $db_name);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
