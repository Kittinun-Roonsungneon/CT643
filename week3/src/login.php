<?php
header('Content-Type: application/json');
include 'db.php';
include 'jwt_utils.php';

// รับข้อมูลจากฟอร์ม
$username = $_POST['username'];
$password = $_POST['password'];

// ตรวจสอบการล็อกอิน
$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $token = generate_jwt($username);
    $response = array("status" => "success", "message" => "Login successful", "token" => $token);
} else {
    $response = array("status" => "error", "message" => "Invalid username or password");
}

echo json_encode($response);

$stmt->close();
$conn->close();
?>
