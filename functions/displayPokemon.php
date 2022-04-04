<?php
/** Takes the pokemon array generated by fetchPokemonData and turns them into formatted HTML
 *
 * @param array $pokemonArray The pokemon array
 * @return string
 */
function displayPokemon(array $pokemonArray): string{

    if (count($pokemonArray) == 0){
        return "No Pokemon in Collection";
    }

    $toBeDisplayed = "";

    foreach ($pokemonArray as $pokemon){
        $toBeDisplayed .= "<div>";
        $toBeDisplayed .= "<img src='{$pokemon['pokemon-image']}' alt='{$pokemon['species']}'>";
        if ($pokemon['hasNickname'] == 1){
            $toBeDisplayed .= "<div class='nickname'>{$pokemon['nickname']}</div>";
        }
        $toBeDisplayed .= "<div class='species'>{$pokemon['species']}";
        if ($pokemon['gender'] == 1){
            $toBeDisplayed .= " &#9792;";
        } elseif ($pokemon['gender'] == 0){
            $toBeDisplayed .= " &#9794;";
        }
        $toBeDisplayed .= "</div>";
        $toBeDisplayed .= "<div>";
        $toBeDisplayed .= "<img src='{$pokemon['type1image']}' alt='{$pokemon['type1name']}'>";
        if ($pokemon['type2image']){
            $toBeDisplayed .= "<img src='{$pokemon['type2image']}' alt='{$pokemon['type2name']}'>";
        }
        $toBeDisplayed .= "</div></div>";
    }

    return $toBeDisplayed;
}