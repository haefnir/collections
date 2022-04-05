<?php
/** Turns the user inputted gender into a tinyint
 *
 * @param string|null $gender user inputted gender
 * @return int|null
 */
function sanitiseGender(?string $gender): ?int {
    if ($gender === "female"){
        return 1;
    } elseif ($gender === "male") {
        return 0;
    }
    return NULL;
}