<?php
/** Fetches require data from the Pokemon database
 *
 * @param PDO $database The database variable
 * @return array
 */
function fetchPokemonData(PDO $database): array {
    $query = $database->prepare(
        "SELECT 
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
		ON `pokemon-species-data`.`type2` = `type2`.`id`;");

    $query->execute();
    return $query->fetchAll();

}
