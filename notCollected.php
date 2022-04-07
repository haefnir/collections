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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Uncaught Pokemon</h1>
<a href="index.php">Back to Collection</a>
<div class="container">
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

