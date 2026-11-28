<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    try {

        require_once '../dbh-inc.php';
        require_once '../config.php';
        require_once "rem_model-inc.php";

        $dish_id = $_POST['rem'];
        $tableName = $_POST['Remove_Item'];
        $user_id = $_SESSION['user_id'];


        //No user input so I don't see a need for error handlers

        $infoPacket = [
            'user_id' => $user_id,
            'dish_id' => $dish_id,
            'courseType' => $tableName
        ];

        remove_user_favorite($pdo, $infoPacket);

        header("Location: ../../Main/vietnameseFood.php?remove=success");


    } catch (PDOException $e) {
        die("Query FAILED: " . $e->getMessage());
    }

} else {
    header("Location: ../../Main/vietnameseFood.php");
    die();
}