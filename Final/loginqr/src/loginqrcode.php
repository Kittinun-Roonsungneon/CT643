<?php
session_start();
$headers = getallheaders();

include 'db.php'; // Include the database connection file
include 'jwt.php'; // Include the simple JWT implementation

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userAgent = isset($headers['Agent']) ? $headers['Agent'] : null;
   
    if($userAgent != 'CT648_Assignment2_QR_Authen'){
        echo "Incorrect Agent";
        exit();
    }
    // Get the Authorization header
    $authorizationHeader = isset($headers['Authorization']) ? $headers['Authorization'] : null;

    if ($authorizationHeader) {
        // Extract the Bearer token
        if (preg_match('/Bearer\s(\S+)/', $authorizationHeader, $matches)) {
            $Token = $matches[1];
           
        } else {
            echo "Authorization header is present but does not contain a Bearer token.";
            exit();
        }
    } else {
        echo "Authorization header is not present.";
        exit();
    }

    // Print out the headers to debug
    // echo "Received Headers: ";
    // print_r($headers);
    $rac = isset($headers['RAC']) ? $headers['RAC'] : null;

    if (!$rac) {
        echo "RAC header is not present.";
        exit();
    }
    // echo $Token;
    $sql = "UPDATE access_code_log set token_before = '$Token' where access_code = '$rac'";
    // $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
    // echo $sql;
    // echo 'success';
    exit();
}
?>
