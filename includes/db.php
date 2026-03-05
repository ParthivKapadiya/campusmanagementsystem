<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "campus_cms";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // No echo here! The connection happens quietly in the background.

} catch (PDOException $e) {
    // We keep the die() here just in case the database actually crashes, 
    // so you know why the site isn't working.
    die("Connection Failed: " . $e->getMessage());
}
