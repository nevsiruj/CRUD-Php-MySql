<?php
include "config.php";

$sql  = "SELECT * FROM users_full";

$result = $conn->query($sql);


?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
        <div class="container">
            <h2> Users </h2>
            <table class="table">
                <head>
                    <tr>
                        <th> ID </th>
                        <th> First Name </th>
                        <th> Last Name </th>
                        <th> Email </th>
                        <th> Gender </th>
                        <th> Action </th>

                    </tr>
                    </thread>
                    <tbody>
                        <?php
                        if ($result->num_rows>0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>

                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['firstname']; ?></td>
                                    <td><?php echo $row['lastname']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['gender']; ?></td>
                                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id'] ?>"> Edit</a>&nbsp;
                                        <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>"> Delete</a>
                                    </td>

                                </tr>

                        <?php    }
                        }
                        ?>
                    </tbody>
            </table>
        </div>
</body>

</html>