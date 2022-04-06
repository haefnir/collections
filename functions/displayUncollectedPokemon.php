<?php

/** Displays the entry for each pokemon in uncollected format
 *
 * @param array $pokemon The pokemon array
 * @return string
 */
function displayUncollectedPokemon(array $pokemon): string {

    if (count($pokemon)==0){
        return '';
    }

    $toBeDisplayed = "<div>";
    $toBeDisplayed .= "<img src='{$pokemon['pokemon-image']}' alt='{$pokemon['species']}'>";
    $toBeDisplayed .= "<div class='species'>{$pokemon['species']}</div>";
    $toBeDisplayed .= "<div class='dexNumber'> #{$pokemon['dex number']}</div>";
    $toBeDisplayed .= "<div>";
    $toBeDisplayed .= "<img src='{$pokemon['type1image']}' alt='{$pokemon['type1name']}'>";
    if ($pokemon['type2image']){
        $toBeDisplayed .= "<img src='{$pokemon['type2image']}' alt='{$pokemon['type2name']}'>";
    }
    $toBeDisplayed .= "</div></div>";

    return $toBeDisplayed;
}