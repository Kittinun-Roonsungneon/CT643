<?php 
    include 'db.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // sanitize input
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);
        $nameTH = $conn->real_escape_string($_POST['nameTH']);
        $nameEN = $conn->real_escape_string($_POST['nameEN']);
        $studentID = $conn->real_escape_string($_POST['studentID']);
        
        // generate UUID
        $uuid = bin2hex(random_bytes(16));
        
        // generate salt
        $salt = bin2hex(random_bytes(16));
        
        // hash the password with the salt
        $hashedPassword = hash('sha256', $password . $salt);
        
        // insert into the database
        $sql = "INSERT INTO employee (uuid, username, password, salt, nameTH, nameEN, studentID) VALUES ('$uuid', '$username', '$hashedPassword', '$salt', '$nameTH', '$nameEN', '$studentID')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    $conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <form action="register.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="nameTH">Name (Thai):</label>
        <input type="text" name="nameTH" required><br>

        <label for="nameEN">Name (English):</label>
        <input type="text" name="nameEN" required><br>

        <label for="studentID">Student ID:</label>
        <input type="text" name="studentID" required><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
