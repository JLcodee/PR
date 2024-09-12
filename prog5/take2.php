<?php

$server_name = "localhost";
$user_name = "root";
$password = "";

$conn = mysqli_connect($server_name,$user_name,$password);

if (!$conn){
    die("UNDIFINED DATABASE" . mysqli_connect_error());
}

$query1 = "CREATE DATABASE zsnhs_portal";
$query2 = "CREATE TABLE sign_in(
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL PRIMARY KEY
)";
$query3 = "CREATE TABLE sign_up(
    LRN VACRCHAR(50) NOT NULL PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    midin VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    age INT(10) NOT NULL,
    sex VARCHAR(10) NOT NULL
)";

$query4 = "INSERT INTO sign_in(username,password) VALUES ("JESIEL","LUCANAS")";
$query5 = "INSERT INTO sign up(LRN,firstname,midin,lastname,age,sex) VALUES (123456789,"Jayrald")"


?>