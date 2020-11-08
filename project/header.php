<style>
    body {
    padding: 50px 0px 0px 0px;
}
.nav-2 {
    padding-top: 20px;
    font-weight: bold;
}
</style>

<nav class="navbar navbar-dark navbar-expand-sm fixed-top" style="background-color : #512DA8;">
    <div class = "container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target = "#Navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mr-auto">
            eCart
        </a>

        <div class="collapse navbar-collapse" id = "Navbar">
            <ul class = "navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../landing page/index.php"> <i class="fa fa-home fa-lg"></i> Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-info fa-lg"></i> About</a>
                </li> -->
            </ul>
            <span class="navbar-text ml-auto">
                <?php
                    if (!isset($_SESSION['email'])){?>
                    <a role="button" id="signupButton" class="btn btn-secondary" href="../signup/signup.php">
                            <span class="fa fa-user-plus"></span> Signup</a>
                            
                        <a role="button" id="loginButton" class="btn btn-primary" href="../login/login.php">
                            <span class="fa fa-sign-in"></span> Login</a>
                <?php 
                    } else { ?>
                            <a id="logoutButton" type="submit" class="btn btn-secondary" href = '../includes/logout.inc.php'>
                                    <span class="fa fa-sign-in"></span> Logout</a>
                       
                <?php   }
                ?>
            </span>
            <span class="navbar-text ">
                <a class="nav-link" href="../cart/cart.php"><i class="fa fa-shopping-cart fa-lg"></i> Cart</a>
            </span>
        </div>
    </div>
</nav>

<nav class="navbar navbar-light navbar-expand-sm" style="background-color: white;">
    <div class="container">
        <ul class="navbar-nav nav nav-2">
            <li class="nav-item">
                <a class="nav-link" href="../electronics/electronics.php"><i class="fas fa-memory fa-lg"></i> Electronics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../clothing/clothing.php"><i class="fas fa-tshirt fa-lg"></i> Clothing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../footwear/footwear.php"><i class="fas fa-shoe-prints fa-lg"></i> Foot Wears</a>
            </li>
        </ul>
    </div>
</nav>
