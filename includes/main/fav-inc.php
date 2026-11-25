<?php

require_once "fav_contr-inc.php";
require_once "fav_model-inc.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $favorite = $_POST["fav"];
    $course = whichCourse($favorite);

    $pdo = null;
    $statement = null;

    header("Location: ../../Main/vietnameseFood.php");
} else {
    header("Location: ../../Main/vietnameseFood.php");
    die();
}