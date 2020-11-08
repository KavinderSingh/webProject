<?php
    session_start();
    require_once('../includes/dbh.inc.php');
    require_once('../includes/cart.inc.php');
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
        <?php
            $sql = 'SELECT * FROM items WHERE category = ?;';
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header('location: ../footwear/footwear.php?error=ErrorInFetching');
            }
            $category = 'footwear';
            mysqli_stmt_bind_param($stmt, 's', $category);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while($row = mysqli_fetch_assoc($result)) {?>
                
                <div class="card">
                    <img class="card-img-top" src = <?php echo $row['src']; ?> alt = "img">
                    <div class="card-body">
                        <div class="card-title">
                            <?php echo 'Name: '.$row['name']; ?>
                        </div>
                        <p class="card-text">
                            <?php echo 'Price: '.$row['price']?>
                        </p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) {?>
                                <p> Login to add item to cart </p>
                                <?php 
                            } else if (check_if_added_to_cart($conn, $row['id'])) {
                                echo '<p><a href="#" class="btn btn-secondary disabled text-white">Added to cart</a></p>';
                                } 
                            else {?>
                            <!-- <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p> -->
                            <form action = '../includes/cart.inc.php' method = 'POST'>
                                <textarea name = 'itemId' style = 'display: none'> <?php echo $row['id']; ?> </textarea>
                                <textarea name = 'category' style = 'display: none'> <?php echo $row['category']; ?> </textarea>
                                <textarea name = 'userId' style = 'display: none'> <?php echo $_SESSION['userId']; ?> </textarea>
                                <button type = 'submit' name = 'submit' class = 'btn btn-warning text-white'>Add To Cart</button>
                                
                            </form>
                            <?php
                            }?> 
                </div>
        <?php } ?>
        </div>
    </div>
    
    <?php
    require_once('../footer.php');
  ?>
</body>
</html>