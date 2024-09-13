<?php

$server_name = "localhost";
$user_name = "root";
$pass = "";
$dbname = "zsnhs_portal";

// Create connection
$conn = mysqli_connect($server_name, $user_name, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER ["REQUEST_METHOD"]=="POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $lrn = $_POST["lrn"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    // Validate that passwords match
    if ($pwd !== $pwdrepeat) {
        die("Passwords do not match.");
    }

    // Hash the password
    $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO sign_up (Fullname, LRN, pass) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("sss", $name, $lrn, $hashed_pwd);

    // Execute the query
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . htmlspecialchars($stmt->error);
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

} else {
    header("Location: ../index.html");
    exit();
}
?>