<?php
/** Fetches the types table from the database
 * @param PDO $db
 * @return array|false
 */
function fetchTypes(PDO $db){
    $query = $db->prepare(
        "SELECT `id`, `name` FROM `types`;"
    );

    $query->execute();
    return $query->fetchAll();
}