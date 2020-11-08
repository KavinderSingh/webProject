<?php
if (isset($_POST['submit'])) {
    require_once('dbh.inc.php');
    require_once('functions.inc.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    
    if(emptyInputSignup($username, $email, $contact, $password, $confirm) === true) {
        header('location: ../signup/signup.php?error=emptyInput');
        exit();
    }
    if(emailExists($conn,$email) !== false) {
        header("location: ../signup/signup.php?error=EmailAlreadyExists");
        exit();
    }
    if(invalidEmail($email) !== false) {
        header("location: ../signup/signup.php?error=invalidEmail");
        exit();
    }

    if(pwdMatch($password, $confirm) !== false) {
        header('location: ../signup/signup.php?error=passwordsDoNotMatch');
        exit();
    }
    

    create($conn, $username, $email, $contact, $password);

}
else {
    header('location: ../signup/signup.php');
    exit();
}