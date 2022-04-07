<?php
require_once 'functions/allFunctions.php';

$db = connectToDB('pokemon-collection');

$type1 = $_GET['type1'] ?? 0;
$type2 = $_GET['type2'] ?? 0;
$unPokemon = fetchFilteredUncollectedPokemon($type1, $type2, $db);
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
<?php $types=fetchTypes($db);
    echo generateFilterForm($types);
?>

<?php if (count($unPokemon) == 0){
    echo "You've caught them all!";
} else {
    echo '<div class="container">';
    foreach ($unPokemon as $pokemon){
        echo displayUncollectedPokemon($pokemon);
    }
    echo '</div>';
} ?>
</body>
</html>

