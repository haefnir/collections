<?php

function changeDeleteFlag(int $id, PDO $db) {
    $query= $db->prepare(
        "UPDATE `user-pokemon`
        SET `deleted` = 1
        WHERE `id` = :id
        LIMIT 1;");
    $query->bindParam(':id', $id);
    $query->execute();
}