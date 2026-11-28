<?php 
    require_once '../includes/config.php';
    require_once '../includes/dbh-inc.php';
    require_once '../includes/main/randh_model-inc.php';
    require_once '../includes/main/randh_contr-inc.php';
    require_once '../includes/login/login_view-inc.php';
    require_once '../includes/main/fav_model-inc.php';
    require_once '../includes/main/fav_contr-inc.php';
    require_once '../includes/main/fav_view-inc.php';
    
    fullRandomizer($pdo, "max_main", "max_side", "max_drink", "vietnameseFood.php");

    $mainCourse = htmlspecialchars($_SESSION['stored_rand_data']['mainCourse']);
    $mainDesc = htmlspecialchars($_SESSION['stored_rand_data']['mainDesc']);
    $mainLink = htmlspecialchars($_SESSION['stored_rand_data']['mainLink']);

    $side = htmlspecialchars($_SESSION['stored_rand_data']['side']);
    $sideDesc = htmlspecialchars($_SESSION['stored_rand_data']['sideDesc']);
    $sideLink = htmlspecialchars($_SESSION['stored_rand_data']['sideLink']);

    $drink = htmlspecialchars($_SESSION['stored_rand_data']['drink']);
    $drinkDesc = htmlspecialchars($_SESSION['stored_rand_data']['drinkDesc']);
    $drinkLink = htmlspecialchars($_SESSION['stored_rand_data']['drinkLink']);

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        get_user_fav_table($pdo, $user_id);
    }

?>

<!DOCTYPE html>
<head>
    <html lang="en">
    <link href="../Styling/VietnameseFood.css" rel="stylesheet">
    <script type="text/javascript" src="../JavaScript/VietnameseFood.js" defer>
    </script>

</head>

<body>
    <?php output_username() ?>
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
                
    </header>
    <br>

    <div class="CardContainer">
        <div class="card">
            <div class="Image">
                <img id="Image" src="../Images/yummyfood.png" alt="Vietnamese Food" style="width: 100%;">
            </div>

            <form class="Favorite" action="../includes/main/fav-inc.php" method="post">
                    <input type="hidden" name="fav" value="main">
                    <button id="Favorite">Favorite</button><br>
            </form>
            
            <div class="container">
                <h4><b><?= $mainCourse?></b></h4>
                <p><?= $mainDesc?></p>
                <a href="<?= $mainLink ?>">Link</a>
            </div>
        </div>

        <div class="card">
            <div class="Image">
                <img id="Image" src="../Images/yummyfood.png" alt="Vietnamese Food" style="width: 100%;">
            </div>

            <form class="Favorite" action="../includes/main/fav-inc.php" method="post">
                    <input type="hidden" name="fav" value="side">
                    <button id="Favorite">Favorite</button><br>
            </form>

            <div class="container">
                <h4><b><?= $side?></b></h4>
                <p><?= $sideDesc?></p>
                <a href="<?= $sideLink ?>">Link</a>
            </div>
        </div>
        
        <div class="card">
            <div class="Image">
                <img id="Image" src="../Images/yummyfood.png" alt="Vietnamese Food" style="width: 100%">
            </div>

            <form class="Favorite" action="../includes/main/fav-inc.php" method="post">
                    <input type="hidden" name="fav" value="drink">
                    <button id="Favorite" name="Favorite_Side" value="Side">Favorite</button><br>
            </form>

            <div class="container">
                <h4><b><?= $drink?></b></h4>
                <p><?= $drinkDesc?></p>
                <a href="<?= $drinkLink ?>">Link</a>
            </div>
        </div>

        <div class="Control_Buttons">
            <form class="randomizer" action="vietnameseFood.php" method="post">
                <button id="Randomizer">Randomize All</button><br>
            </form>
            <br>
            <?php check_favorite_errors(); ?>
        </div>
    </div>

    <h1 id="HeaderSelect">Favorites</h1>

    <div class="results">
        <?php render_favorites($pdo) ?>
    </div>

</body>
