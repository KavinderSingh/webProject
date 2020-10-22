<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        require_once('../cdnScripts.php')
    ?>

    <title>eCart | Footwear</title>
</head>
<body>

    <?php
    require_once('../header.php');
    ?>

    <div class="jumbotron">
        <img src="../img/footwear/banner.jpg" style="height: 500px; width: 100%; padding-bottom: 50px;">
        <div class="container">
            <div class="display-2">
                Take your next step
            </div>
            <p class="lead">With Comfort</p>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="card-columns">
            <div class="card item-1">
                <img src="../img/footwear/shoe1.jpg" alt="" class="card-img-top" >
                <div class="card-title">
                    <h6 id = "name">Shoe 1</h6>
                    <h6 id = "price">Price :Rs 3000</h6>
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
                <img src="../img/footwear/shoe2.jpg" alt="" class="img-fluid pb-1" height="200" width="400">
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
                <img src="../img/footwear/shoe3.jpg" alt="" class="img-fluid pb-1">
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
                <img src="../img/footwear/shoe4.jpg" alt="" class="img-fluid pb-1" height="200" width="400">
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
        </div>
    </div>
    
    <?php
    require_once('../footer.php');
  ?>
</body>
</html>