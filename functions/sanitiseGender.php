<?php

function sanitiseGender(?string $gender): ?int{
    if ($gender === "female"){
        return 1;
    } elseif ($gender === "male") {
        return 0;
    }
    return NULL;
}