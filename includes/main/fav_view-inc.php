<?php

declare(strict_types=1);

function render_favorites(object $pdo) {

    $length = count($_SESSION['user_favorites']);
    

    for ($i = 0; $i < $length; $i++) {

        $dish_id = $_SESSION['user_favorites'][$i]['dish_id'];
        $tableName = $_SESSION['user_favorites'][$i]['courseType'];

        $result = get_favorite_dish($pdo, $dish_id, $tableName);

        echo '<div>
            <div class="container">
                <h4><b>' . $result['food_name'] . '</b></h4>
                <p>' . $result['description'] . '</p>
                <a href="' . $result['link'] . '">Link</a>

                <form class="Remove" action="../includes/main/rem-inc.php" method="post">
                    <input type="hidden" name="rem" value="' . $result['id'] . '">
                    <button id="Remove" name="Remove_Item" value="' . $tableName . '">Remove</button><br>
                </form>
            </div>
        </div>';


    }

}

function render_fav_table(object $pdo) {

    $length = count($_SESSION['user_favorites']);
    

    for ($i = 0; $i < $length; $i++) {
        echo '<br>';
        echo 'loop: ' . $i;
        echo '<br>';

        echo $dish_id = $_SESSION['user_favorites'][$i]['dish_id'];
        echo $tableName = $_SESSION['user_favorites'][$i]['courseType'];

        echo gettype($dish_id);
        echo gettype($tableName);

        $result = get_favorite_dish($pdo, $dish_id, $tableName);
        
        echo $result['food_name'];
        echo '<br>';
        echo "Success";


    }

    
}

function check_favorite_errors() {
    if (isset($_SESSION["errors_favorite"])) {
        $errors = $_SESSION["errors_favorite"];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p class="favorite-error">' . $error . '</p>';
        }

        unset($_SESSION['errors_favorite']);
    } else if (isset($_GET["favorite"]) && $_GET["favorite"] === "success") {
        echo "<br>";
        echo '<p class="form-success">Favorited!</p>';
    }
}