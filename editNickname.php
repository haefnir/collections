<?php
require_once "functions/allFunctions.php";

if (isset($_POST['id']) && is_numeric($_POST['id'])){
    header("location: index.php");
    exit();
}

$db = connectToDB('pokemon-collection');
$inputtedNewNickname = $_POST['newNickname'];
$inputtedID = $_POST['id'];

$cleanNickname = sanitiseText($inputtedNewNickname);
$cleanID = sanitiseText($inputtedID);

changeNicknameInDatabase($cleanID, $cleanNickname, $db);

header("location:edit.php?id={$_POST['id']}");