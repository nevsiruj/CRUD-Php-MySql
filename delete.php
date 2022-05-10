<?php
    include "config.php";

    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $sql = "DELETE FROM users_full WHERE id= $user_id";

        $result = $conn->query($sql);

        if ($result == true) {
            echo "User deleted successfully<br>";
            echo $sql;

        }else {
            echo "User deleted failed";
           
        }
    }

    ?>

<!-- <a href = "view.php"> View</a> -->
