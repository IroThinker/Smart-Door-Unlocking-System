<?php

$user_username = $_POST['username'];
$user_password = $_POST['password'];
$user_email = $_POST['email'];

include('../connectDB.php');

$sql = "INSERT INTO users (username, email, password) VALUES ('$user_username', '$user_email', '$user_password')";

if ($conn->query($sql) === TRUE) {
    header('Location: ../');
    $_SESSION["user"] = $user_username;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>