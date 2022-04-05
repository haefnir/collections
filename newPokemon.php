<?php
require_once "functions/allFunctions.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Pokemon</title>
</head>
<body>
<h1>Fill in your new Pokemon's details</h1>

<form method="post">
    <label>Nickname (optional):
        <input name="nickname" type="text">
    </label>
    <label>Species (required):
        <input name="species" type="text">
    </label>
    <fieldset>
    <legend>Gender (optional)</legend>
    <label>&#9792;
        <input name="gender" type="radio" value="Female">
    </label>
    <label>&#9794;
        <input name="gender" type="radio" value="Male">
    </label>
    </fieldset>
    <input type="submit">
</form>

</body>
</html>