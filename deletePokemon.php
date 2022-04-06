<?php
require_once "functions/allFunctions.php";

if (!isset($_POST['id']) || !is_numeric($_POST['id'])){
    header("location: index.php");
    exit();
}

if ($_POST['delete'] != 'delete') {
    header("location:edit.php?id={$_POST['id']}");
    exit();
}
$db = connectToDB('pokemon-collection');

$cleanID = sanitiseText($_POST['id']);

changeDeleteFlag($cleanID, $db);

header("location:index.php");