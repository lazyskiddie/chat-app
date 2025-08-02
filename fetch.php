<?php
include "db.php";
$conn->query("DELETE FROM messages WHERE expire_at <= NOW()");
$result = $conn->query("SELECT * FROM messages ORDER BY created_at DESC LIMIT 50");
$messages = [];
while ($row = $result->fetch_assoc()) {
  $messages[] = $row;
}
echo json_encode(array_reverse($messages));
?>