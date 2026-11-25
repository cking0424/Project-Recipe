<?php

declare(strict_types=1);



function get_id(string $food_name, string $course) {
    require_once "../dbh-inc.php";
    require_once '../config.php';

    switch ($course) {
        case 'main':
                $table = $_SESSION['stored_rand_data']['mainTable'];
                $query = "SELECT id FROM $table WHERE food_name = :food_name;";
                $stmt = $pdo->prepare($query);
                $stmt->bindParam(':food_name', $food_name);
                $stmt->execute();

                $results = $stmt->fetch(PDO::FETCH_ASSOC);
                return $results;
            break;
        case 'side':
                $table = $_SESSION['stored_rand_data']['sideTable'];
                $query = "SELECT id FROM $table WHERE food_name = :food_name;";
                $stmt = $pdo->prepare($query);
                $stmt->bindParam(':food_name', $food_name);
                $stmt->execute();

                $results = $stmt->fetch(PDO::FETCH_ASSOC);
                return $results;
            break;
        case 'drink':
                $table = $_SESSION['stored_rand_data']['drinkTable'];
                $query = "SELECT id FROM $table WHERE food_name = :food_name;";
                $stmt = $pdo->prepare($query);
                $stmt->bindParam(':food_name', $food_name);
                $stmt->execute();

                $results = $stmt->fetch(PDO::FETCH_ASSOC);
                return $results;
            break;
        default:
                header("Location: ../../Main/vietnameseFood.php");
                die();
            break;
    }
}