<?php 
    require_once '../includes/config.php';
    require_once '../includes/signup/signup_view-inc.php';
    require_once '../includes/login/login_view-inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>

    <link href="../Styling/LogInPage.css" rel="stylesheet">
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
    <div class="login_check">
        <?php output_username() ?>
    </div>
    <div class="forms">
        <div class="innerform">
            <div>
                <div>
                    <h3>Login</h3>
                </div>

                <div>
                    <form action="../includes/login/login-inc.php" method="post">

                        <div>
                            <input type="text" name="username" placeholder="Username" >
                        </div>

                        <div>
                            <input type="password" name="pwd" placeholder="Password" >
                        </div>

                        <div>
                            <button>Login</button>
                        </div>

                    </form>
                </div>

                <div>
                    <?php
                    check_login_errors();
                    ?>
                </div>
            </div>
        </div>
    
        <div class="innerform">
            <div>
                <h3>Signup</h3>
            </div>
            
            <div>
                <form action="../includes/Signup/signup-inc.php" method="post">

                    <div>
                        <?php check_signup_data(); ?>
                    </div>
    
                    <div>
                        <button>Signup</button>
                    </div>

                </form>
            </div>
            <div>
                <?php 
                check_signup_errors();
                ?>
            </div>
        </div>

        <div class="innerform">
            <div>
                <h3>Logout</h3>

                <form action="../includes/login/logout-inc.php" method="post">
                    <button>Logout</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
