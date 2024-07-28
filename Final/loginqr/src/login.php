<?php
session_start();

include 'db.php'; // Include the database connection file
include 'jwt.php'; // Include the simple JWT implementation


// สร้างข้อความแจ้งเตือน
// $message = "ทดสอบ";

// Token สำหรับการแจ้งผ่าน Line Notify
$token = 'MeHN6VNE4a3m4CnB2IPJAvly7hNvlMdCCVi9pyzDaGh';

// ฟังก์ชันสำหรับส่งข้อความไปยัง Line Notify
function send_line_notify($message, $token)
{
    $line_api = 'https://notify-api.line.me/api/notify';
    $data = array('message' => $message);
    $headers = array(
        'Content-Type: multipart/form-data',
        'Authorization: Bearer ' . $token,
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $line_api);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

?>
<script>

    // if session is null token local
</script>
<?php

$secret_key = "your_secret_key"; // Replace with your actual secret key

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM employee WHERE username='$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $uuid = $user['uuid'];
        if ($user['password'] == $password) {
            // Create token payload
            $payload = array(
                "iss" => "your_domain.com", // Issuer
                "aud" => "your_domain.com", // Audience
                "iat" => time(), // Issued at
                "nbf" => time(), // Not before
                "exp" => time() + 3600, // Expiration time (1 hour)
                "data" => array(
                    "id" => $user['id'],
                    "username" => $user['username']
                )
            );

            // Generate JWT
            $jwt = JWT::encode($payload, $secret_key);
            $sql = "INSERT INTO token_log (employee_id, jwt_token, login_type) values ('$uuid', '$jwt', 'input')";
            $conn->query($sql);
            $message = "User Logged in \n
            Group: PHP / Javascript / MySql \n
            token: ".$jwt;
            // Redirect with JWT
            send_line_notify($message, $token);
            ?>
            <script>
                localStorage.setItem("token", "<?php echo $jwt; ?>");
                window.location.href = "index.php";
            </script>
            <?php
            exit(); // Ensure no further code is executed after the redirect
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="login.php">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
