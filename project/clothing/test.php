<?php
    $sql = "SELECT * FROM items WHERE category = ?";
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../clothing/clothing.php?error=FetchError");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 's', 'clothing');
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    $size = sizeof($row);

    for($i = 0; $i < size; $i++) {
        ?>
        <div class="card item-1">
                <img src= <?php $row['src'] ?> alt="" class="card-img-top" >
                <div class="card-title">
                    <h6 id = "name"><?php $row['name'] ?></h6>
                    <h6 id = "price"><?php $row['price'] ?></h6>
                    <?php if (isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else if (!isset($_SESSION['email'])) {?>
                        <p> Login to add item to cart </p>
                    <?php 
                    } else {
                        if (check_if_added_to_cart($row['id'])) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                         } 
                    }
                    ?>
                </div>
            </div>
   <?php } ?>

   <div class="card">
                <img src="../img/clothing/shirt2.jpg" alt="" class="img-fluid pb-1" height="200" width="400">
                <div class="figure-caption">
                    <h6>Guest Watch</h6>
                    <h6>Price :Rs 2500</h6>
                    <?php if (isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else if (!isset($_SESSION['email'])) {?>
                        <p> Login to add item to cart </p>
                    <?php 
                    } else {
                        if (check_if_added_to_cart(2)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                         } 
                    }
                    ?>
                </div>
            </div>
            <div class="card">
                <img src="../img/clothing/shirt3.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Guest Watch</h6>
                    <h6>Price :Rs 2500</h6>
                    <?php if (isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else if (!isset($_SESSION['email'])) {?>
                        <p> Login to add item to cart </p>
                    <?php 
                    } else {
                        if (check_if_added_to_cart(2)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                         } 
                    }
                    ?>
                </div>
            </div>
            <div class="card">
                <img src="../img/clothing/shirt4.jpg" alt="" class="img-fluid pb-1" height="200" width="400">
                <div class="figure-caption">
                    <h6>Guest Watch</h6>
                    <h6>Price :Rs 2500</h6>
                    <?php if (isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else if (!isset($_SESSION['email'])) {?>
                        <p> Login to add item to cart </p>
                    <?php 
                    } else {
                        if (check_if_added_to_cart(2)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                         } 
                    }
                    ?>
                </div>
            </div>




<!-- 

    adding to cart
    1. turn the button to "ADDED"
    check_if_in_cart(Pid) {
        if (for a user the item is in cart) return true;
       if (select COUNT() from cart where productID = Pid and Uid = $_SESSION['userid']; > 0) return true;
       return false;
    }

$sql = "SELECT * FROM cart WHERE uid = ?";
if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: placeholder/error");
        exit();
}



mysqli_stmt_bind_param($stmt, 's', $_SESSION['userid']);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

$size = sizeof($row); -->

