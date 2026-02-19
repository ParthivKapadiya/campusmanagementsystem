<?php
$con = mysqli_connect(hostname: "localhost", username: "root", password: "root", database: "25_26_A");

// $create_db = "create database 25_26_A";
// if(mysqli_query($con, $create_db)){
//     echo "Database created";
// } else{
//     echo "error";
// }


$create_table = "create table students(id int(11) auto_increment primary key,name varchar(255), email varchar(255),phone varchar(20),course varchar(100),status varchar(20),role varchar(20))";
// if(mysqli_query($con, $create_table)){
//     echo "Table created";
// } else{
//     echo "error";
// }