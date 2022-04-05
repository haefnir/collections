<?php
/** Cleans text inputs
 *
 * @param string $input The text input to be sanitised
 * @return string|null
 */
function sanitiseText(string $input): ?string{
    $trimmedInput = trim($input);
    $sanitisedInput = htmlspecialchars($trimmedInput);
    return $sanitisedInput;
}