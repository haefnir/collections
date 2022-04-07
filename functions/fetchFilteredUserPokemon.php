<?php
/** Fetches filtered pokemon from the user database
 *
 * @param int|null $type1 The first possible type
 * @param int|null $type2 The second possible type
 * @param PDO $db
 * @return array
 */
function fetchFilteredUserPokemonData(?int $type1, ?int $type2, PDO $db): array {
    $queryString = "SELECT 
            `user-pokemon`.`id`,
            `user-pokemon`.`nickname`, 
            `user-pokemon`.`hasNickname`, 
            `pokemon-species-data`.`name` AS 'species',
            `user-pokemon`.`gender`,
            `pokemon-species-data`.`image-src` AS `pokemon-image`,
            `type1`.`name` AS 'type1name',
            `type1`.`image-src` AS `type1image`,
            `type2`.`name` AS 'type2name',
            `type2`.`image-src` AS `type2image`
            
            FROM `user-pokemon`
           INNER JOIN `pokemon-species-data`
                ON `user-pokemon`.`speciesId` = `pokemon-species-data`.`id`
            LEFT JOIN `types` AS `type1`
                ON `pokemon-species-data`.`type1` = `type1`.`id`
            LEFT JOIN `types` AS `type2`
                ON `pokemon-species-data`.`type2` = `type2`.`id`
            WHERE `user-pokemon`.`deleted` = '0' ";

    if (19>$type1 && $type1>0){ // The range of type IDs goes from 1 to 18, hence this check
        $queryString .= "AND (`pokemon-species-data`.`type1` = :type1
		                OR	`pokemon-species-data`.`type2` = :type1) ";
    }

    if (19>$type2 && $type2>0){ // The range of type IDs goes from 1 to 18, hence this check
        $queryString .= "AND (`pokemon-species-data`.`type1` = :type2
        OR `pokemon-species-data`.`type2` = :type2) ";
    }

    $queryString .= ";";

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
