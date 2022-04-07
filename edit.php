<?php

require_once 'functions/allFunctions.php';

$db = connectToDB('pokemon-collection');
$pokemonID = $_GET['id'];

$userPokemon = fetchSingleUserPokemonData($db, $pokemonID);

if(!$userPokemon){
    header("location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pokemon</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Edit <?=($userPokemon['hasNickname']==1) ? $userPokemon['nickname'] . " the " : ""; echo $userPokemon['species'];?></h1>
<?php echo displayPokemon($userPokemon,0); ?>
<form method="post" action="editNickname.php">
    <label>Give <?php echo $userPokemon['hasNickname']==1 ? $userPokemon['nickname'] : $userPokemon['species'];?> a new nickname? (Leave blank to clear nickname. Max chars: 12)
        <input type="text" name="newNickname" maxlength="12">
    </label>
    <input type="hidden" name="id" value="<?=$pokemonID?>">
    <input type="submit">
</form>
<form method="post" action="deletePokemon.php">
    <label>Delete <?php echo $userPokemon['hasNickname']==1 ? $userPokemon['nickname'] : $userPokemon['species'];?> from your collection?
      <input type="checkbox" name="delete" value="delete">
    </label>
    <input type="hidden" name="id" value="<?=$pokemonID?>">
    <input type="submit" value="Delete">
</form>
<a href="index.php">Back to collection</a>
</body>
</html>