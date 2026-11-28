<?php

declare(strict_types=1);

function remove_user_favorite(object $pdo, array $infoPacket) {
            $query = "DELETE FROM favorites WHERE courseType = :courseType AND dish_id = :dish_id AND user_id = :user_id;";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":dish_id", $infoPacket["dish_id"]);
            $stmt->bindParam(":courseType", $infoPacket["courseType"]);
            $stmt->bindParam(":user_id", $infoPacket["user_id"]);
            $stmt->execute();
}