<?php
$conn = new mysqli(
  "sql210.infinityfree.com",     // Replace with your actual SQL host
  "if0_39589762",                // DB username
  "Singh0208A",               // DB password
  "if0_39589762_chatapp"         // Full DB name
);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

