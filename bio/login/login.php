<?php
$user_username = $_POST['username'];
$user_password = $_POST['password'];

include('../connectDB.php');


$sql = "SELECT * FROM users WHERE username = '$user_username' AND password = '$user_password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $_SESSION["user"] = $user_username;
    header('Location: ../');
} else {
    header("Location: ./index.html?incorrect");
}
$conn->close();

?>