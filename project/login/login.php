<html>  
<head>  
    <title>Ecart | Login</title>  
    <?php
        require_once('../cdnScripts.php')
    ?>
    <link rel = "stylesheet" type = "text/css" href = "./style.css">   
</head>  
<body>  
    <?php
        require_once('../header.php');
    ?>
    <div id = "frm">  
        <h1>Login</h1>  
        <form  action = "../includes/login.inc.php" method = "POST">  
        <p>  
                <label> Email: </label>  
                <input type = "text" name  = "email" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" name  = "password" />  
            </p>  
            <p>     
                <button type =  "submit" name = "submit">Login </button>  
            </p>  
        </form>  
        <?php
        if (isset($_GET['error'])) {
            
            if($_GET['error'] == 'invalidEmail') {
                echo '<p> Invalid Email</p>';
            }
            else if($_GET['error'] == 'WrongLogin') {
                echo '<p> Either email or password is incorrect</p>';
            }
            else if($_GET['error'] == 'usernotfound') {
                echo '<p> User does not exist</p>';
            } else if($_GET['error'] == 'emptyInput') {
                echo '<p> All fields are mendatory to fill</p>';
            }
        }
    ?>
    </div>
    
    
    
    <?php
        require_once('../footer.php');
    ?>

</body>     
</html> 