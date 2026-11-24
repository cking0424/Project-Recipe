<?php 
    require_once '../includes/config.php';


    try {  
        require_once '../includes/dbh-inc.php';
        require_once '../includes/randh-inc.php';
        //Main
        
        if (!isset($_SESSION['stored_rand_data']) || $_SERVER["REQUEST_METHOD"] === "POST") {
            $results = randomizeCourse($pdo, "max_main");

            $mainCourse = htmlspecialchars($results["food_name"]);
            $mainDesc = htmlspecialchars($results["description"]);
            $mainLink = htmlspecialchars($results["link"]);

            $results = randomizeCourse($pdo, "max_side");

            $side = htmlspecialchars($results["food_name"]);
            $sideDesc = htmlspecialchars($results["description"]);
            $sideLink = htmlspecialchars($results["link"]);

            $results = randomizeCourse($pdo, "max_drink");

            $drink = htmlspecialchars($results["food_name"]);
            $drinkDesc = htmlspecialchars($results["description"]);
            $drinkLink = htmlspecialchars($results["link"]);

            $stored_rand_data = [
                'mainCourse' => $mainCourse,
                'mainDesc' => $mainDesc,
                'mainLink' => $mainLink,

                'side' => $side,
                'sideDesc' => $sideDesc,
                'sideLink' => $sideLink,

                'drink' => $drink,
                'drinkDesc' => $drinkDesc,
                'drinkLink' => $drinkLink
        ];

        $_SESSION['stored_rand_data'] = $stored_rand_data;

        header("Location: vietnameseFood.php");

        } else {
            $mainCourse = $_SESSION['stored_rand_data']['mainCourse'];
            $mainDesc = $_SESSION['stored_rand_data']['mainDesc'];
            $mainLink = $_SESSION['stored_rand_data']['mainLink'];

            $side = $_SESSION['stored_rand_data']['side'];
            $sideDesc = $_SESSION['stored_rand_data']['sideDesc'];
            $sideLink = $_SESSION['stored_rand_data']['sideLink'];

            $drink = $_SESSION['stored_rand_data']['drink'];
            $drinkDesc = $_SESSION['stored_rand_data']['drinkDesc'];
            $drinkLink = $_SESSION['stored_rand_data']['drinkLink'];
        }

        
        //Closing the connection
        $pdo = null;
        $statement = null;

    } catch (PDOException $e) {
        die("Query FAILED: " . $e->getMessage());
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