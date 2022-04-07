<?php
require_once 'functions/allFunctions.php';

$db = connectToDB('pokemon-collection');

$unPokemon = fetchAllUncollectedPokemon($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokemon Collection</title>
</head>
<body>
<h1>Uncaught Pokemon</h1>
<a href="index.php">Back to Collection</a>
<div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 0px 0px;">
<?php if (count($unPokemon) == 0){
    echo "You've caught them all!";
} else {
    foreach ($unPokemon as $pokemon){
        echo displayUncollectedPokemon($pokemon);
    }
} ?>
</div>
</body>
</html>

