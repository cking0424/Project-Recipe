<?php

declare(strict_types=1);

function get_min_max_id(object $pdo, $tableName) {
    $query = "SELECT MIN(id) AS low_ID, MAX(id) AS high_ID FROM $tableName;";
    $foodID = $pdo->prepare($query);
    $foodID->execute();

    $result = $foodID->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function randomizeCourse(object $pdo, $tableName) {
    $foodID = get_min_max_id($pdo, $tableName);
    $randID = rand($foodID["low_ID"], $foodID["high_ID"]);

    $query = "SELECT food_name, description, link FROM $tableName WHERE id = :randID;";

    //Preparing user info
    $statement = $pdo->prepare($query);

    $statement->bindParam(":randID", $randID);

    $statement->execute();

    $results = $statement->fetch(PDO::FETCH_ASSOC);

    return $results;
}