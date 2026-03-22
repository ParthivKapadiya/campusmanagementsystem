<?php
include 'includes/db.php';

if ($conn) {
    echo "Database connected successfully";
} else {
    echo "Connection failed";
}



echo password_hash("admin12345", PASSWORD_DEFAULT) . "<br>";
echo password_hash("hod12345", PASSWORD_DEFAULT) . "<br>";
echo password_hash("director12345", PASSWORD_DEFAULT) . "<br>";