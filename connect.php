<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$username = $_POST['username'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$conn = new mysqli('localhost', 'root', '', 'varsha');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO contact_us(username, email, subject, message) 
    values(?, ?, ?, ?)");
    if ($stmt === false) {
        die('Prepare failed: ' . $conn->error);
    }
    $stmt->bind_param("ssss", $username, $email, $subject, $message);
    if ($stmt->execute()) {
        echo "Registration successfully...";
    } else {
        echo "Execute failed: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
