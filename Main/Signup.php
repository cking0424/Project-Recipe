<?php 
    require_once '../includes/config.php';
    require_once '../includes/signup/signup_view-inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>

    <link href="../Styling/LogInPage.CSS" rel="stylesheet">
</head>
<body>
    <header>

        <div class="TopNav">
            <div><img src="wow"></div>
            <div><h1>SnapGredients</h1></div>
            <div href="N/A">
                <a id="NavHome" href="Website Recipe Transcriber.php">Home</a>
            </div>
            <div>
                <a id="Ben" href="Recommended.html">Chinese</a>
            </div>
            <div>
                <a id="Chand" href="myrecipe.html">Mediterranean</a>
            </div>
            <div>
                <a id="Max" href="vietnameseFood.php">Vietnamese</a>
            </div>
            <div>
                <a id="Sydney" href="Contact_Page.html">American</a>
            </div>
            <div>
                <a id="Sign" href="Signup.php">Signup/Login</a>
            </div>
        </div>
                
       
         <div class ="tab">
            

        </div>
    </header>
    <br>
    
    <h3>Signup</h3>

    <form action="../includes/Signup/signup-inc.php" method="post">
        <?php check_signup_data(); ?>
        <button>Signup</button>
    </form>
    <div>
    <?php 
    check_signup_errors();
    ?>
    </div>
    <h3>Log In</h3>

    <form action="../includes/login/login-inc.php" method="post">
        <input type="text" name="username" placeholder="Username" >
        <input type="password" name="pwd" placeholder="Password" >
        <button>Log In</button>
    </form>

</body>
</html>