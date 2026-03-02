<?php
session_start();

$conn = new mysqli("localhost", "root", "", "db");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if ($_POST["action"] === "register") {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $conn->query($sql);

        echo "User Registered Successfully!";
    }
}
?>
