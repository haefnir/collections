<?php

require_once 'functions/allFunctions.php';

$db = connectToDB('pokemon-collection');

$userPokemon = fetchPokemonData($db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokemon Collection</title>
</head>
<body>
<h1>My Pokemon</h1>

<a href="newPokemon.php">Add a Pokemon</a>

<?php echo displayPokemon($userPokemon); ?>
</body>
</html>
