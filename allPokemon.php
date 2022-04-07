<?php
require_once 'functions/allFunctions.php';

$db = connectToDB('pokemon-collection');

$type1 = $_GET['type1'] ?? 0;
$type2 = $_GET['type2'] ?? 0;
$allPokemon = fetchAllPokemonData($type1, $type2, $db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Pokemon</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>All Pokemon</h1>
<a href="index.php">Back to Collection</a>
<?php $types=fetchTypes($db);
echo generateFilterForm($types);
echo '<div class="container">';
foreach ($allPokemon as $pokemon){
    echo displayUncollectedPokemon($pokemon);
}
echo '</div>';
?>

</body>
</html>