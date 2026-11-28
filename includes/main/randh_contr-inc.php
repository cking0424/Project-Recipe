<?php

declare(strict_types=1);

function fullRandomizer(object $pdo, string $tableName1, string $tableName2, string $tableName3, string $returnPage) {
    
try {  
        //Main
        if (!isset($_SESSION['stored_rand_data']) || $_SERVER["REQUEST_METHOD"] === "POST") {
            $results = randomizeCourse($pdo, $tableName1);

            $mainCourse = htmlspecialchars($results["food_name"]);
            $mainDesc = htmlspecialchars($results["description"]);
            $mainLink = htmlspecialchars($results["link"]);
            $mainPic = htmlspecialchars($results["image"]);

            $results = randomizeCourse($pdo, $tableName2);

            $side = htmlspecialchars($results["food_name"]);
            $sideDesc = htmlspecialchars($results["description"]);
            $sideLink = htmlspecialchars($results["link"]);
            $sidePic = htmlspecialchars($results["image"]);

            $results = randomizeCourse($pdo, $tableName3);

            $drink = htmlspecialchars($results["food_name"]);
            $drinkDesc = htmlspecialchars($results["description"]);
            $drinkLink = htmlspecialchars($results["link"]);
            $drinkPic = htmlspecialchars($results["image"]);

            $stored_rand_data = [
                'mainTable' => $tableName1,
                'mainCourse' => $mainCourse,
                'mainDesc' => $mainDesc,
                'mainLink' => $mainLink,
                'mainPic' => $mainPic,

                'sideTable' => $tableName2,
                'side' => $side,
                'sideDesc' => $sideDesc,
                'sideLink' => $sideLink,
                'sidePic' => $sidePic,

                'drinkTable' => $tableName3,
                'drink' => $drink,
                'drinkDesc' => $drinkDesc,
                'drinkLink' => $drinkLink,
                'drinkPic' => $drinkPic
        ];

        $_SESSION['stored_rand_data'] = $stored_rand_data;

        header("Location: $returnPage");

        } else {
            $mainCourse = $_SESSION['stored_rand_data']['mainCourse'];
            $mainDesc = $_SESSION['stored_rand_data']['mainDesc'];
            $mainLink = $_SESSION['stored_rand_data']['mainLink'];
            $mainLink = $_SESSION['stored_rand_data']['mainPic'];

            $side = $_SESSION['stored_rand_data']['side'];
            $sideDesc = $_SESSION['stored_rand_data']['sideDesc'];
            $sideLink = $_SESSION['stored_rand_data']['sideLink'];
            $sideLink = $_SESSION['stored_rand_data']['mainPic'];

            $drink = $_SESSION['stored_rand_data']['drink'];
            $drinkDesc = $_SESSION['stored_rand_data']['drinkDesc'];
            $drinkLink = $_SESSION['stored_rand_data']['drinkLink'];
            $drinkLink = $_SESSION['stored_rand_data']['mainPic'];
        }
        //Closing the connection
        $pdo = null;
        $statement = null;


    } catch (PDOException $e) {
        die("Query FAILED: " . $e->getMessage());
    }
}
