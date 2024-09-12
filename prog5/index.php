<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$dtbname = "zsnhs_portal";


$conn = mysqli_connect($server_name,$user_name,$password,$dtbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}
$query1 = "CREATE TABLE sign_in(

    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL PRIMARY KEY
)";

$query2 = "CREATE TABLE sign_up(

    LRN VARCHAR(13) NOT NULL PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    midin VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    age INT(10) NOT NULL
)";

if (mysqli_query($conn,$query1)){
    echo "TABLE sign_in is now created ";
}
else{
    echo "ERROR " . $mysqli_error($conn);
}

if (mysqli_query($conn,$query2)){
    echo "TABLE sign_in is now created ";
}
else{
    echo "ERROR " . mysqli_error($conn);
}
mysqli_close($conn);


?>