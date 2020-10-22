<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
        require_once('../cdnScripts.php')
    ?>
    <link rel = "stylesheet" href = "./styles.css">

    <title>eCart | Electronics</title>
</head>
<body>

    <?php
        require_once('../header.php');
    ?>
    
    <div class="jumbotron">
        <img src="../img/electronics/edb.jpg" style="height: 500px; width: 100%; padding-bottom: 50px;">
    </div>
    <br>
    <div class="container">
        <div class="card-columns">
            <div class="card">
                <img class="card-img-top" src = "../img/electronics/apple.jpg" alt = "img">
                <div class="card-body">
                    <div class="card-title">
                        DSD FWIJDWEW
                    </div>
                    <p class="card-text">
                        132423.122Rs.
                    </p>
                </div>
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
            <div class="card">
                <img class="card-img-top" src = "../img/electronics/bose.jpg" alt = "img">
                <div class="card-body">
                    <div class="card-title">
                        DSD FWIJDWEW
                    </div>
                    <p class="card-text">
                        132423.122Rs.
                    </p>
                </div>
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
            <div class="card">
                <img class="card-img-top" src = "../img/electronics/earpods.jpg" alt = "img">
                <div class="card-body">
                    <div class="card-title">
                        DSD FWIJDWEW
                    </div>
                    <p class="card-text">
                        132423.122Rs.
                    </p>
                </div>
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
            <div class="card">
                <img class="card-img-top" src = "../img/electronics/headphones.jpg" alt = "img">
                <div class="card-body">
                    <div class="card-title">
                        DSD FWIJDWEW
                    </div>
                    <p class="card-text">
                        132423.122Rs.
                    </p>
                </div>
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

    <?php
        require_once("../footer.php");
    ?>
</body>
</html>