<?php
if (isset($_POST['submit'])) {
    require_once('dbh.inc.php');

    $id = $_POST['itemId'];
    $uid = $_POST['userId'];
    $category = $_POST['category'];

    addToCart($conn, $id, $uid, $category);

}

if (isset($_POST['delete'])) {
    require_once('dbh.inc.php');

    $id = $_POST['itemId'];
    $uid = $_POST['userId'];
    
    remove_from_cart($conn, $id, $uid);

}

function remove_from_cart($conn, $id, $uid) {

    $sql = 'DELETE FROM cart where uid = ? AND pid = ?;';
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../cart/cart.php?error=ErrorDeleting');
        exit();
    }
    mysqli_stmt_bind_param($stmt, 'ss', $uid, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../cart/cart.php');
}

function addToCart($conn, $id, $uid, $category) {
    $sql = "INSERT INTO cart (uid, pid) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup/signup.php?error=signupQueryError");
        exit();
    }
    mysqli_stmt_bind_param($stmt, 'ss', $uid, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    $url = '../'.$category.'/'.$category.'.php';
    $url = str_replace(" ", "", $url);
    header("location:".$url);
    exit();
}

function check_if_added_to_cart($conn, $itemId) {
    $sql = "SELECT pid FROM cart WHERE uid = ? and pid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup/signup.php?error=EmailCheckError");
        exit();
    }

    $userId = $_SESSION['userId'];

    mysqli_stmt_bind_param($stmt, 'ss', $userId, $itemId);
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

