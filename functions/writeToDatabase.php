<?php
/** Writes a new entry in the user-pokemon table
 *
 * @param $speciesID The retrieved species ID
 * @param $nickname The sanitised nickname for the pokemon
 * @param $gender   The gender tinyint
 * @param PDO $database    The target database
 * @return void
 */
function writeToDatabase($speciesID, $nickname, $gender, PDO $database){

    $hasNickname = $nickname ? 1 : 0;

    $query = $database->prepare(
        "INSERT INTO `user-pokemon`(`nickname`,`hasNickname`,`speciesID`,`gender`) VALUES (:nickname, '$hasNickname', '$speciesID', :gender);"
    );
    $query->bindParam(':nickname', $nickname);
    $query->bindParam(':gender', $gender);

    $query->execute();
}