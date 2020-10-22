<?php
if (isset($_POST['submit'])) {
    require_once('dbh.inc.php');
    require_once('functions.inc.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(emptyInputLogin($email, $password) === true) {
        header('location: ../login/login.php?error=emptyInput');
        exit();
    }
    
    if(invalidEmail($email) !== false) {
        header("location: ../login/login.php?error=invalidEmail");
        exit();
    }

    loginUser($conn, $email, $password);

}
else {
    header('location: ../login/login.php?error=NOTPOST');
    exit();
}