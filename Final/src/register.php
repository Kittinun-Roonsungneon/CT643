<?php
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nameTH = $_POST['nameTH'];
    $nameEN = $_POST['nameEN'];
    $studentID = $_POST['studentID'];

    $salt = bin2hex(random_bytes(16));
    $hashedPassword = password_hash($password . $salt, PASSWORD_BCRYPT);

    $stmt = $pdo->prepare('INSERT INTO employee (uuid, username, password, salt, nameTH, nameEN, studentID) VALUES (UUID(), ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$username, $hashedPassword, $salt, $nameTH, $nameEN, $studentID]);

    echo 'Registration successful';
}
?>

<form method="POST" action="register.php">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    Name (TH): <input type="text" name="nameTH"><br>
    Name (EN): <input type="text" name="nameEN"><br>
    Student ID: <input type="text" name="studentID"><br>
    <button type="submit">Register</button>
</form>
