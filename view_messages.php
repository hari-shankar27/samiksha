<?php
include 'db_config.php';

$sql = "SELECT * FROM messages ORDER BY created_at DESC";
$result = $conn->query($sql);

echo "<h2>Contact Messages</h2>";
while ($row = $result->fetch_assoc()) {
    echo "<p><strong>{$row['name']}</strong> ({$row['email']})<br>{$row['message']}</p><hr>";
}
?>
