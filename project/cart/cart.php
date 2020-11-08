<?php
    session_start();
    require_once('../includes/dbh.inc.php');
    require_once('../cart/cart.php');
    $items_cost = array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
        require_once('../cdnScripts.php')
    ?>
    <link rel = "stylesheet" href = "./styles.css">

    <title>eCart | Cart</title>
</head>
<body>

    <?php
        require_once('../header.php');
        if (!isset($_SESSION['email'])) { ?>
            <div class="container">
                <div class = 'text-center'>
                    <h4>Login to Add Items to cart</h4>
                    <a type="button" href = '../landing page/index.php' class="btn btn-warning">Go to home page</a>
                </div>
            </div>
        <?php exit();}
    ?>
    
    <div class="container">
        <ul class="list-unstyled">
        <?php
            $sql = 'SELECT pid FROM cart WHERE uid = ?;';
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header('location: ../landing page/index.php?error=ErrorInFetching');
            }
            $userId = $_SESSION['userId'];
            mysqli_stmt_bind_param($stmt, 's', $userId);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while($row = mysqli_fetch_assoc($result)) {?>
                <?php 
                    $sqli = 'SELECT * FROM items WHERE id = ?;';
                    $stmti = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmti, $sqli)) {
                        header('location: ../landing page/index.php?error=ErrorInFetching');
                    }
                    mysqli_stmt_bind_param($stmti, 's', $row['pid']);
                    mysqli_stmt_execute($stmti);
                    $resulti = mysqli_stmt_get_result($stmti);
                    while($innerRow = mysqli_fetch_assoc($resulti)) {?>
                        <li class="media">
                            <img class="mr-3" src = <?php echo $innerRow['src']; ?> alt = "img" width = '300' height = '300'>
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">
                                    <?php echo 'Product: '.$innerRow['name']; ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo 'Price: '. $innerRow['price']?>
                                </p>
                            </div>
                            <?php array_push($items_cost, $innerRow['price']) ?>
                                <form action = '../includes/cart.inc.php' method = 'POST'>
                                    <textarea name = 'itemId' style = 'display: none'> <?php echo $innerRow['id']; ?> </textarea>
                                    <textarea name = 'userId' style = 'display: none'> <?php echo $_SESSION['userId']; ?> </textarea>
                                    <button type = 'submit' name = 'delete' class = 'btn btn-danger text-white'>Remove from cart</button>
                                </form>
                                   
                        </li>
                    <?php } ?>
        <?php } ?>
        
        </ul>

        <div class = 'media'>
            <div class = 'media-body'>
                <?php
                    $size = sizeof($items_cost);
                    $sum = 0;
                    for($i = 0; $i < $size; $i++) {
                        $sum += $items_cost[$i];
                    }
                ?>
                <h5><?php  echo 'TOTAL:'; echo $sum; ?></h5>
            </div>
            <a type = 'button' href = 'payment.php' class = 'btn btn-primary mb-3'>Proceed to buy </a>
        </div>
        
    </div>
        
    <?php
        require_once("../footer.php");
    ?>
</body>
</html>