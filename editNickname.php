<?php
require_once "functions/allFunctions.php";

if (!isset($_POST['id']) || !is_numeric($_POST['id']) || strlen($_POST['newNickname']) > 12){
    header("location: index.php");
    exit();
}

$db = connectToDB('pokemon-collection');

$cleanNickname = sanitiseText($_POST['newNickname']);
$cleanID = sanitiseText($_POST['id']);

changeNicknameInDatabase($cleanID, $cleanNickname, $db);

header("location:edit.php?id={$_POST['id']}");