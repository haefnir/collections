<?php

require 'functions/allFunctions.php';

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

<?php echo displayPokemon($userPokemon); ?>
</body>
</html>
