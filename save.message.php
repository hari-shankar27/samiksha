<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert into MySQL
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message Sent Successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error: Unable to send message.'); window.location.href='index.html';</script>";
    }
}
$conn->close();
?>
