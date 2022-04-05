<?php

function writeToDatabase($speciesID, $nickname, $gender, PDO $database){

    $hasNickname = $nickname ? 1 : 0;

    $query = $database->prepare(
        "INSERT INTO `user-pokemon`(`nickname`,`hasNickname`,`speciesID`,`gender`) VALUES (:nickname, '$hasNickname', '$speciesID', :gender);"
    );
    $query->bindParam(':nickname', $nickname);
    $query->bindParam(':gender', $gender);

    $query->execute();
}