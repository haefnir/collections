<?php

require_once 'functions/allFunctions.php';

$db = connectToDB('pokemon-collection');
$type1 = $_GET['type1'] ?? 0;
$type2 = $_GET['type2'] ?? 0;
$userPokemon = fetchFilteredUserPokemonData($type1, $type2, $db);

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
<a href="allPokemon.php">Check out all available Pokemon</a>
<?php $types=fetchTypes($db);
echo generateFilterForm($types);
if (count($userPokemon) == 0){
    echo "<img src='https://i.imgflip.com/6bqizl.jpg' alt='No Pokemon?'>";
} else {
    echo '<div class="container">';
    foreach ($userPokemon as $pokemon){
        echo displayPokemon($pokemon);
    }
    echo '</div>';

} ?>
</body>
</html>
