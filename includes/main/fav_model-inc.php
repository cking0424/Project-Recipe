<?php

declare(strict_types=1);



function get_id(object $pdo, string $food_name, string $course) {
    require_once '../config.php';

    switch ($course) {
        case 'main':
                $table = $_SESSION['stored_rand_data']['mainTable'];
                $query = "SELECT id FROM $table WHERE food_name = :food_name;";
                $stmt = $pdo->prepare($query);
                $stmt->bindParam(':food_name', $food_name);
                $stmt->execute();

                $results = $stmt->fetch(PDO::FETCH_ASSOC);

                $pdo = null;
                $stmt = null;
                return $results;
            break;
        case 'side':
                $table = $_SESSION['stored_rand_data']['sideTable'];
                $query = "SELECT id FROM $table WHERE food_name = :food_name;";
                $stmt = $pdo->prepare($query);
                $stmt->bindParam(':food_name', $food_name);
                $stmt->execute();

                $results = $stmt->fetch(PDO::FETCH_ASSOC);

                $pdo = null;
                $stmt = null;
                return $results;
            break;
        case 'drink':
                $table = $_SESSION['stored_rand_data']['drinkTable'];
                $query = "SELECT id FROM $table WHERE food_name = :food_name;";
                $stmt = $pdo->prepare($query);
                $stmt->bindParam(':food_name', $food_name);
                $stmt->execute();

                $results = $stmt->fetch(PDO::FETCH_ASSOC);

                $pdo = null;
                $stmt = null;
                return $results;
            break;
        default:
                header("Location: ../../Main/vietnameseFood.php");
                die();
            break;
    }

}

function get_favorite(object $pdo, int $dish_id, int $user_id, string $tableName) {
    $query = "SELECT dish_id FROM favorites WHERE dish_id = :dish_id AND courseType = :tableName AND user_id = :user_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":dish_id", $dish_id);
    $stmt->bindParam(":tableName", $tableName);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_favorite_dish(object $pdo, int $dish_id, string $tableName) {

    $query = "SELECT * FROM $tableName WHERE id = :dish_id";

    //Preparing user info
    $statement = $pdo->prepare($query);

    $statement->bindParam(":dish_id", $dish_id);

    $statement->execute();

    $results = $statement->fetch(PDO::FETCH_ASSOC);

    return $results;
}

function get_user_favorite_db(object $pdo, int $user_id) {
    $query = "SELECT dish_id, courseType FROM favorites WHERE user_id = :user_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['user_favorites'] = $result;
}

function set_user_favorite(object $pdo, array $infoPacket) {
            $query = "INSERT INTO favorites (username, dish_id, courseType, user_id) VALUES (:username, :dish_id, :courseType, :user_id);";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":username", $infoPacket["username"]);
            $stmt->bindParam(":dish_id", $infoPacket["dish_id"]);
            $stmt->bindParam(":courseType", $infoPacket["courseType"]);
            $stmt->bindParam(":user_id", $infoPacket["user_id"]);
            $stmt->execute();
}
