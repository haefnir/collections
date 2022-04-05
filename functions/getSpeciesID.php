<?php
/** Retrieves the species ID, accounting for the Nidoran gendered edge case
 *
 * @param string $species Sanitised species name
 * @param $gender Gender tinyint
 * @param PDO $database Target database
 * @return false|mixed
 */
function getSpeciesID(string $species, $gender, PDO $database) {
    $query = $database->prepare(
        "SELECT `id` FROM `pokemon-species-data` WHERE `name` LIKE :placeholder;"
    );
    if (strtolower($species) == "nidoran"){
        if ($gender == 1){
            $nidoranFemale = 'Nidoran♀';
            $query->bindParam(':placeholder', $nidoranFemale);
        } elseif ($gender == 0){
            $nidoranMale = 'Nidoran♂';
            $query->bindParam(':placeholder', $nidoranMale);
        } else {
            return false;
        }
    } else {
        $query->bindParam(':placeholder', $species);
    }
    $query->execute();
    $speciesIDFetch = $query->fetch();

    if (!$speciesIDFetch) {
        return false;
    }

    $speciesID = $speciesIDFetch['id'];

    if (!$speciesID) {
        return false;
    }
    return $speciesID;
}