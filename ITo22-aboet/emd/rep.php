<?php
    $conn = new mysqli("MYSQL-8.0.24", "66209010022", "pw66209010022", "66209010022");
    if ($conn->connect_error) die("เชื่อมต่อฐานข้อมูลล้มเหลว");

    $username = $_POST["username"];
    $password = $_POST["password"];
    $c_pass = $_POST["c_pass"];

    if ($password != $c_pass) die("รหัสผ่านไม่ตรงกัน");

    // ตรวจสอบว่าชื่อผู้ใช้มีอยู่แล้วหรือไม่
    $check_stmt = $conn->prepare("SELECT COUNT(*) FROM admin WHERE username = ?");
    $check_stmt->bind_param("s", $username);
    $check_stmt->execute();
    $check_stmt->bind_result($count);
    $check_stmt->fetch();
    $check_stmt->close();

    if ($count > 0) {
        die("ชื่อผู้ใช้นี้มีอยู่แล้ว กรุณาเลือกชื่อใหม่");
    }

    // เพิ่มข้อมูลลงในฐานข้อมูล
    $stmt = $conn->prepare("INSERT INTO admin (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        header("location:../login.php");
    } else {
        die("เกิดข้อผิดพลาดในการบันทึกข้อมูล");
    }

$stmt->close();
$conn->close();

?>
