<?php
$conn = new mysqli("localhost", "pmaroot", "pmaroot");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
