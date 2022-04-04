<?php

include 'functions/allFunctions.php';

$db = connectToDB('pokemon-collection');

$userPokemon = fetchPokemonData($db);

echo '<h1>My Pokemon</h1>';

foreach ($userPokemon as $pokemon){
    echo '<div>';
        echo "<img src='{$pokemon['pokemon-image']}' alt='{$pokemon['species']}'>";
        if ($pokemon['hasNickname'] == 1){
            echo "<div class='nickname'>{$pokemon['nickname']}</div>";
        }
        echo "<div class='species'>{$pokemon['species']}";
        if ($pokemon['gender'] == 1){
            echo " &#9792;";
        } elseif ($pokemon['gender'] == 0){
            echo " &#9794;";
        }
        echo "</div>";
        echo "<div>";
        echo "<img src='{$pokemon['type1image']}' alt='{$pokemon['type1name']}'>";
        if ($pokemon['type2image']){
            echo "<img src='{$pokemon['type2image']}' alt='{$pokemon['type2name']}'>";
        }
        echo "</div></div>";
}
