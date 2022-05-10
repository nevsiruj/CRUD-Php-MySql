<?php
include 'config.php';

if (isset($_POST['update'])) {
    $firstname = $_POST['firstname'];
    $user_id = $_GET['id'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $sql = "UPDATE users_full SET firstname = '$firstname', lastname = '$lastname', email = '$email', gender = '$gender' WHERE id = '$user_id'"; 
       
    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo 'Record Updated Successfully';
        header("Location: view.php");
    } else {
        echo 'Record Updated Failurefully';
    }
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM users_full WHERE id= '$id'"; 

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $password = $row['password'];
            $gender = $row['gender'];
            $id = $row['id'];
        }

?>
        
        <html>

        <body>
            <h2> User Update Form </h2>

            <form action="update.php?id=<?php echo $_GET['id']; ?>"  method="POST">
                <fieldset>
                    <legend> Personal Information </legend>
                    First Name : <br>
                    <input type="text" name="firstname" value="<?php echo $firstname; ?>">
                    <!-- <input type="hidden" name="user_id" value="<?php echo $id; ?>" /> -->
                    <br>
                    Last Name : <br>
                    <input type="text" name="lastname" value="<?php echo $lastname; ?>">
                    <br>
                    Email : <br>
                    <input type="text" name="email" value="<?php echo $email; ?>">
                    <br>
                    Password : <br>
                    <input type="text" name="password" value="<?php echo $password; ?>">
                    <br>
                    Gender : <br>
                    <input type="radio" name="gender" value="Female" <?php if ($gender == "Female"){ echo "checked";} ?>> Female
                    <input type="radio" name="gender" value="Male" <?php if ($gender == "Male") {echo "checked";}?>> Male
                    <br><br>
                    <input type="submit" name="update" value="update">
                </fieldset>
            </form>

        </body>

        </html>

<?php
    } else {
        header("Location: view.php");
    }
}
?>