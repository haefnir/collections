<?php

require_once 'functions/allFunctions.php';

$db = connectToDB('pokemon-collection');

$userPokemon = fetchAllUserPokemonData($db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokemon Collection</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>My Pokemon</h1>

<a href="newPokemon.php">Add a Pokemon</a>
<a href="notCollected.php">See whose missing</a>

<div class="container">
<?php if (count($userPokemon) == 0){
    echo "No Pokemon in Collection";
} else {
    foreach ($userPokemon as $pokemon){
        echo displayPokemon($pokemon);
    }
} ?>
</div>
</body>
</html>
