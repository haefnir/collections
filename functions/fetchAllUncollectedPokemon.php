<?php
/** Fetches all Pokemon data for Pokemon that do not appear in user-pokemon
 * @param PDO $db The database
 * @return array|false
 */
function fetchAllUncollectedPokemon(PDO $db) {
    $query = $db->prepare(
        "SELECT `pokemon-species-data`.`dex number`, 
                    `pokemon-species-data`.`name` AS 'species', 
                    `pokemon-species-data`.`type1`,
                    `pokemon-species-data`.`type2`,
                    `pokemon-species-data`.`image-src` AS `pokemon-image`,
                    `type1`.`name` AS 'type1name',
                    `type1`.`image-src` AS `type1image`,
                    `type2`.`name` AS 'type2name',
                    `type2`.`image-src` AS `type2image`   
                FROM `pokemon-species-data`
                LEFT JOIN `user-pokemon` 
                        ON `user-pokemon`.`speciesID` = `pokemon-species-data`.`id`
                LEFT JOIN `types` AS `type1`
                        ON `pokemon-species-data`.`type1` = `type1`.`id`
                    LEFT JOIN `types` AS `type2`
                        ON `pokemon-species-data`.`type2` = `type2`.`id`
                WHERE `user-pokemon`.`speciesID` NOT IN ( SELECT `speciesID`
											                FROM `user-pokemon`
												            WHERE `deleted`=0)
		                OR `user-pokemon`.`speciesID` IS NULL
                GROUP BY `pokemon-species-data`.`dex number`
                ORDER BY `pokemon-species-data`.`dex number` ASC;"
    );

    $query->execute();
    return $query->fetchAll();
}