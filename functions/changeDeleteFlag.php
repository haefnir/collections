<?php
/** Sets deleted flag in the database to 1
 * @param int $id the ID in the user-pokemon table
 * @param PDO $db the database
 * @return void
 */
function changeDeleteFlag(int $id, PDO $db): void {
    $query= $db->prepare(
        "UPDATE `user-pokemon`
        SET `deleted` = 1
        WHERE `id` = :id
        LIMIT 1;");
    $query->bindParam(':id', $id);
    $query->execute();
}