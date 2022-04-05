<?php
require_once "functions/allFunctions.php";

$db = connectToDB('pokemon-collection');

$userNickname = $_POST['nickname'];
$userSpecies = $_POST['species'];

$userGender = $_POST['gender'] ?? NULL;

$gender = sanitiseGender($userGender);
$nickname = sanitiseText($userNickname);
$species = sanitiseText($userSpecies);

$speciesID = getSpeciesID($species, $gender, $db);

if($speciesID) {
    writeToDatabase($speciesID, $nickname, $gender, $db);
    header('location: index.php');
} else {
    header('location: error.php');
}

