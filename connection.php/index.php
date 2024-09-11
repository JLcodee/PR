<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database_name = "zsnhs_portal"; 

    $connection = mysqli_connect($server_name, $user_name, $password, $database_name);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create 'sign_in' table
    $query1 = "CREATE TABLE sign_in (
        username VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL,
        PRIMARY KEY (username)
    )";

    if (mysqli_query($connection, $query1)) {
        echo "sign_in table created successfully.<br>";
    } else {
        echo "Error creating sign_in table: " . mysqli_error($connection) . "<br>";
    }

    // Create 'sign_up' table
    $query2 = "CREATE TABLE sign_up (
        LRN INT(13) NOT NULL PRIMARY KEY,
        firstname VARCHAR(59) NOT NULL,
        middlename VARCHAR(50) NOT NULL,
        lastname VARCHAR(50) NOT NULL,
        age TINYINT NOT NULL,
        sex ENUM('Male', 'Female', 'Other') NOT NULL
    )";

    if (mysqli_query($connection, $query2)) {
        echo "sign_up table created successfully.<br>";
    } else {
        echo "Error creating sign_up table: " . mysqli_error($connection) . "<br>";
    }

    mysqli_close($connection);
?>
