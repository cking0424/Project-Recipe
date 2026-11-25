<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $favorite = $_POST["fav"];
    
    try {

        require_once '../dbh-inc.php';
        require_once '../config.php';
        require_once "fav_model-inc.php";
        require_once "fav_contr-inc.php";

        $course = whichCourse($pdo, $favorite);

        //ERROR HANDLERS
        $errors = [];

        if (!isset($_SESSION["user_id"])) {
            $errors["not_logged_in"] = "Not logged in! Please log in and try again.";
        } 

        $dish_id = $course['id'];
        $tableName = $course['table'];

        if (is_already_favorite($pdo, $dish_id, $tableName)) {
            $errors["already_favorited"] = "You have already favorited this dish!";
        }

        if ($errors) {
            $_SESSION['errors_favorite'] = $errors;

            header("Location: ../../Main/vietnameseFood.php");
            die();
        }

        $infoPacket = [
            'username' => $_SESSION['user_username'],
            'user_id' => $_SESSION['user_id'],
            'dish_id' => $course['id'],
            'courseType' => $course['table']
        ];

        set_user_favorite($pdo, $infoPacket);

        header("Location: ../../Main/vietnameseFood.php?favorite=success");

        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        die("Query FAILED: " . $e->getMessage());
    }
    
} else {
    header("Location: ../../Main/vietnameseFood.php");
    die();
}
