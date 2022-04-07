<?php
function fetchAllPokemonData(?int $type1, ?int $type2, PDO $db) {
    $queryString = "SELECT `pokemon-species-data`.`dex number`, 
                    `pokemon-species-data`.`name` AS 'species', 
                    `pokemon-species-data`.`type1`,
                    `pokemon-species-data`.`type2`,
                    `pokemon-species-data`.`image-src` AS `pokemon-image`,
                    `type1`.`name` AS 'type1name',
                    `type1`.`image-src` AS `type1image`,
                    `type2`.`name` AS 'type2name',
                    `type2`.`image-src` AS `type2image`   
                FROM `pokemon-species-data`
                LEFT JOIN `types` AS `type1`
                        ON `pokemon-species-data`.`type1` = `type1`.`id`
                    LEFT JOIN `types` AS `type2`
                        ON `pokemon-species-data`.`type2` = `type2`.`id`
                WHERE `pokemon-species-data`.`id` ";

    if (19>$type1 && $type1>0){ // The range of type IDs goes from 1 to 18, hence this check
        $queryString .= "AND (`pokemon-species-data`.`type1` = :type1
		                OR	`pokemon-species-data`.`type2` = :type1) ";
    }

    if (19>$type2 && $type2>0){ // The range of type IDs goes from 1 to 18, hence this check
        $queryString .= "AND (`pokemon-species-data`.`type1` = :type2
        OR `pokemon-species-data`.`type2` = :type2) ";
    }

    $queryString .= " GROUP BY `pokemon-species-data`.`dex number`
                ORDER BY `pokemon-species-data`.`dex number` ASC;";

    $query = $db->prepare($queryString);
    if (19>$type1 && $type1>0) { // The range of type IDs goes from 1 to 18, hence this check
        $query->bindParam(':type1', $type1);
    }
    if (19>$type2 && $type2>0) { // The range of type IDs goes from 1 to 18, hence this check
        $query->bindParam(':type2', $type2);
    }
    $query->execute();
    return $query->fetchAll();
}