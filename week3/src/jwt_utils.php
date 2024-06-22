<?php
require 'vendor/autoload.php';
use \Firebase\JWT\JWT;

function generate_jwt($username) {
    $secret_key = $_ENV['JWT_SECRET'];
    $issuer = "your_issuer"; // ตัวอย่าง: domain ของคุณ
    $audience = "your_audience";
    $issued_at = time();
    $expiration_time = $issued_at + 3600; // 1 ชั่วโมง

    $payload = array(
        "iss" => $issuer,
        "aud" => $audience,
        "iat" => $issued_at,
        "exp" => $expiration_time,
        "data" => array(
            "username" => $username
        )
    );

    return JWT::encode($payload, $secret_key);
}

function validate_jwt($jwt) {
    $secret_key = $_ENV['JWT_SECRET'];
    try {
        $decoded = JWT::decode($jwt, $secret_key, array('HS256'));
        return (array) $decoded->data;
    } catch (Exception $e) {
        return false;
    }
}
?>
