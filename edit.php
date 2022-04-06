<?php

require_once 'functions/allFunctions.php';

$db = connectToDB('pokemon-collection');
$pokemonID = $_GET['id'];

$userPokemon = fetchSingleUserPokemonData($db, $pokemonID);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pokemon</title>
</head>
<body>
<h1>Edit Pokemon</h1>
<?php echo displayPokemon($userPokemon,0); ?>
<form>
    <label>Give <?php echo $userPokemon['nickname'] ?? $userPokemon['species'];?> a new nickname?
        <input type="text">
    </label>
    <input type="submit">
</form>
<form>
    <label>Delete <?php echo $userPokemon['nickname'] ?? $userPokemon['species'];?> from your collection?
      <input type="checkbox" value="delete">
    </label>
    <input type="submit" value="Delete">
</form>
</body>
</html>