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
<h1>Edit <?=($userPokemon['hasNickname']==1) ? $userPokemon['nickname'] . " the " : ""; echo $userPokemon['species'];?></h1>
<?php echo displayPokemon($userPokemon,0); ?>
<form method="post" action="editNickname.php">
    <label>Give <?php echo $userPokemon['nickname'] ?? $userPokemon['species'];?> a new nickname? (Leave blank to clear nickname. Max chars: 12)
        <input type="text" name="newNickname">
    </label>
    <input type="hidden" name="id" value="<?=$pokemonID?>">
    <input type="submit">
</form>
<form>
    <label>Delete <?php echo $userPokemon['nickname'] ?? $userPokemon['species'];?> from your collection?
      <input type="checkbox" name="delete" value="delete">
    </label>
    <input type="submit" value="Delete">
</form>
<a href="index.php">Back to collection</a>
</body>
</html>