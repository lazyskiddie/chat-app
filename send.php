<?php
include "db.php";
$sender = $_POST['sender'];
$message = $_POST['message'];
if (!empty($sender) && !empty($message)) {
  $stmt = $conn->prepare("INSERT INTO messages (sender, message, expire_at) VALUES (?, ?, DATE_ADD(NOW(), INTERVAL 24 HOUR))");
  $stmt->bind_param("ss", $sender, $message);
  $stmt->execute();
}
?>