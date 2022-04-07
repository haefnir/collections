<?php

function fetchTypes(PDO $db){
    $query = $db->prepare(
        "SELECT `id`, `name` FROM `types`;"
    );

    $query->execute();
    return $query->fetchAll();
}