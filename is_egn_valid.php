<?php

include 'constants.php';

function is_egn_valid(string $egn): bool
{
    $check = (int) substr($egn, 9, 1);

    $sum = 0;
    foreach (str_split(substr($egn, 0, 9)) as $key => $char) {
        $sum += (int) $char * WEIGHT[(int) $key];
    }

    echo $sum."\n";
    $sum %= 11;
    echo $sum."\n";

    if ($check !== $sum) {
        return false;
    }

    return true;
}