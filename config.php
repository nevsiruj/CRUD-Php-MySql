<?php
    $servername =  "localhost";
    $username = "root";
    $password = "";
    $dbname = "test_db";
    $table_name = "users_full";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error) {
        die('Connection Failed'. $conn->connect_error);
    }
?>