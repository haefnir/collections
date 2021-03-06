<?php
/** Takes the pokemon array generated by fetchPokemonData and turns them into formatted HTML
 *
 * @param array $pokemon The pokemon array
 * @param int $mode Sets the display mode. 0: Displays only pokemon 1: Displays edit button
 * @return string
 */
function displayPokemon(array $pokemon, int $mode = 1): string {

    if (count($pokemon)==0){
        return '';
    }

    $toBeDisplayed = "<div>";
    $toBeDisplayed .= "<img src='{$pokemon['pokemon-image']}' alt='{$pokemon['species']}'>";
    if ($pokemon['hasNickname'] == 1){
        $toBeDisplayed .= "<div class='nickname'>{$pokemon['nickname']}</div>";
    }
    $toBeDisplayed .= "<div class='species'>{$pokemon['species']}";
    if ($pokemon['species'] != "Nidoran♂" && $pokemon['species'] != "Nidoran♀") {
        if ($pokemon['gender'] === '1') {
            $toBeDisplayed .= " &#9792;";
        } elseif ($pokemon['gender'] === '0') {
            $toBeDisplayed .= " &#9794;";
        }
    }
    $toBeDisplayed .= "</div>";
    $toBeDisplayed .= "<div>";
    $toBeDisplayed .= "<img src='{$pokemon['type1image']}' alt='{$pokemon['type1name']}'>";
    if ($pokemon['type2image']){
        $toBeDisplayed .= "<img src='{$pokemon['type2image']}' alt='{$pokemon['type2name']}'>";
    }
    if ($mode == 1) {
        $toBeDisplayed .= "<div><a href='edit.php?id={$pokemon['id']}'>Edit</a></div>";
    }
    $toBeDisplayed .= "</div></div>";

    return $toBeDisplayed;
}