<?php
declare(strict_types=1);

function whichCourse(object $pdo, string $course) {
    require_once '../config.php';

    switch ($course) {
        case 'main':
            $food_id = get_id($pdo, $_SESSION['stored_rand_data']['mainCourse'], $course);

            $returnPacket = [
                'id' => $food_id['id'],
                'table' => $_SESSION['stored_rand_data']['mainTable']
            ];

            return $returnPacket;
            break;
        case 'side':
            $food_id = get_id($pdo, $_SESSION['stored_rand_data']['side'], $course);
            
            $returnPacket = [
                'id' => $food_id['id'],
                'table' => $_SESSION['stored_rand_data']['sideTable']
            ];

            return $returnPacket;
            break;
        case 'drink':
            $food_id = get_id($pdo, $_SESSION['stored_rand_data']['drink'], $course);
            
            $returnPacket = [
                'id' => $food_id['id'],
                'table' => $_SESSION['stored_rand_data']['drinkTable']
            ];

            return $returnPacket;
            break;
        default:
            header("Location: ../../Main/vietnameseFood.php");
            die();
            break;
    }
}

function is_already_favorite(object $pdo, int $dish_id, string $tableName) {
            if (get_favorite($pdo, $dish_id, $tableName)) {
                return true;
            } else {
                return false;
            }
}
