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

function is_already_favorite(object $pdo, int $dish_id, int $user_id, string $tableName) {
    if (isset($_SESSION['user_id'])) {
        if (get_favorite($pdo, $dish_id, $user_id, $tableName)) {
                return true;
            } else {
                return false;
            }
    } else {
        return true;
    }
            
}

function get_user_fav_table(object $pdo, int $user_id) {
        get_user_favorite_db($pdo, $user_id);
}
