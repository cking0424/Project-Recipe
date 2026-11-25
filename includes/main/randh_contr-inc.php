<?php

declare(strict_types=1);

function fullRandomizer(object $pdo, $tableName1, $tableName2, $tableName3, $returnPage) {
    try {  
        
        //Main
        if (!isset($_SESSION['stored_rand_data']) || $_SERVER["REQUEST_METHOD"] === "POST") {
            $results = randomizeCourse($pdo, $tableName1);

            $mainCourse = htmlspecialchars($results["food_name"]);
            $mainDesc = htmlspecialchars($results["description"]);
            $mainLink = htmlspecialchars($results["link"]);

            $results = randomizeCourse($pdo, $tableName2);

            $side = htmlspecialchars($results["food_name"]);
            $sideDesc = htmlspecialchars($results["description"]);
            $sideLink = htmlspecialchars($results["link"]);

            $results = randomizeCourse($pdo, $tableName3);

            $drink = htmlspecialchars($results["food_name"]);
            $drinkDesc = htmlspecialchars($results["description"]);
            $drinkLink = htmlspecialchars($results["link"]);

            $stored_rand_data = [
                'mainTable' => $tableName1,
                'mainCourse' => $mainCourse,
                'mainDesc' => $mainDesc,
                'mainLink' => $mainLink,

                'sideTable' => $tableName2,
                'side' => $side,
                'sideDesc' => $sideDesc,
                'sideLink' => $sideLink,

                'drinkTable' => $tableName3,
                'drink' => $drink,
                'drinkDesc' => $drinkDesc,
                'drinkLink' => $drinkLink
        ];

        $_SESSION['stored_rand_data'] = $stored_rand_data;

        header("Location: $returnPage");

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
}