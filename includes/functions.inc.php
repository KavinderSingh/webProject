<?php

function emptyInputSignup($name, $email, $contact, $password, $confirm){
    if (empty($name) || empty($email) || empty($contact) || empty($password) || empty($confirm)){
        return true;
    }
    else {
        return false;
    }
}
function invalidEmail($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function emailExists($conn, $email) {
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup/signup.php?error=EmailCheckError");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($result)){ //assoc returns true if any result got, doing row = ... ,will still return true for assoc and will assign value to row
        return $row;
    }
    else {
        return false;
    }

    mysqli_stmt_close($stmt);
}

function pwdMatch($password, $confirm) {
    $result;
    if($password !== $confirm) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function create($conn, $username, $email, $contact, $password) {
    $sql = "INSERT INTO users (username, email, contact, password) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup/signup.php?error=signupQueryError");
        exit();
    }

    $hashed = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, 'ssss', $username, $email, $contact, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup/signup.php?status=SUCCESS");
}

function emptyInputLogin($email, $password){
    if (empty($email) || empty($password)){
        return true;
    }
    else {
        return false;
    }
}

function loginUser($conn, $email, $password){
    $userExists = emailExists($conn, $email);
    if(!$userExists) {
        header('location: ../login/login.php?error=usernotfound');
        exit();
    }
    
    $entered_password = $userExists['password'];
    $checkpwd = password_verify($password, $entered_password);

    if($password !== $entered_password){
        header('location: ../login/login.php?error=WrongLogin');
        exit();
    }
    else {
        session_start();
        $_SESSION['userId'] = $userExists['userId'];
        $_SESSION['username'] = $userExists['username'];
        $_SESSION['email'] = $userExists['email'];
        header('location: ../landing page/index.php');
        exit();
    }
}