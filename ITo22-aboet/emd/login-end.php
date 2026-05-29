<?php
session_start(); 
    $conn = new mysqli("MYSQL-8.0.24", "66209010022", "pw66209010022", "66209010022");
    if ($conn->connect_error) die("เชื่อมต่อฐานข้อมูลล้มเหลว");

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

    $sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $_SESSION['username'] = $username; // เก็บ username ใน session
                header("Location: ../home.html");
                exit();
            } else {
                header("Location: ../login.php");
            }
        } else {
            die("Query execution failed: " . $stmt->error);
        }
        $stmt->close();
    } else {
        die("Statement preparation failed: " . $conn->error);
    }
    $conn->close();
} else {
    echo "Please provide a username and password.";
}
$stmt->close();
$conn->close();

?>