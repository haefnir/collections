<?php

function sanitiseText(string $input): ?string{
    $trimmedInput = trim($input);
    $sanitisedInput = htmlspecialchars($trimmedInput);
    return $sanitisedInput;
}