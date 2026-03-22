<?php
$conn = mysqli_connect("localhost", "root", "root", "campus_cms");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
