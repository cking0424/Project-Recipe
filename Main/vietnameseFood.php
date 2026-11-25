<?php 
    require_once '../includes/config.php';
    require_once '../includes/dbh-inc.php';
    require_once '../includes/main/randh_model-inc.php';
    require_once '../includes/main/randh_contr-inc.php';
    
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

?>

<!DOCTYPE html>
<head>
    <html lang="en">
    <link href="../Styling/VietnameseFood.css" rel="stylesheet">
    <script type="text/javascript" src="../JavaScript/VietnameseFood.js" defer>
    </script>

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
        </div>
    </div>

    <h1 id="HeaderSelect">Recently Selected</h1>

    <div class="results">

    </div>

</body>
