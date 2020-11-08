<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        require_once('../cdnScripts.php');
    ?>
    <title>eCart | signup</title>
</head>
<?php 
    require_once('../header.php');
?>
<body>
    <center>
        <form action = '../includes/signup.inc.php' method = 'post'>
            <label for = 'username'>Username</label>
            <br>
            <input type="text" name = 'username'>
            <br>
            <label for = 'email'>email</label>
            <br>
            <input type="text" name = 'email'>
            <br>
            <label for = 'contact'>Phone number</label>
            <br>
            <input type="text" name = 'contact'>
            <br>
            <label for = 'password'>Password</label>
            <br>
            <input type="password" name = 'password'>
            <br>
            <label for = 'confirm'>Confirm Password</label>
            <br>
            <input type="password" name = 'confirm'>
            <br>
            <button type = 'submit' name = 'submit'>Sign up</button>

        </form>
        <?php
            if (isset($_GET['error'])) {
                $err = $_GET['error'];
                if($err == 'emptyInput') {
                    echo "<p>Fill all the fields</p>";
                }
                else if($err == 'EmailAlreadyExists') {
                    echo "<p>Email Already Exists</p>";
                }
                else if($err == 'invalidEmail') {
                    echo "<p>invalid Email</p>";
                }
                else if($err == 'passwordsDoNotMatch') {
                    echo "<p>Passwords Do Not Match</p>";
                }
            }
        ?>
    </center>
</body>
<?php
    require_once('../footer.php');
?>
</html>