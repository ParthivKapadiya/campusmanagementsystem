<?php
$conn = mysqli_connect("localhost", "root", "", "campus_cms");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
