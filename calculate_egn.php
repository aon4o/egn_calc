<?php

function calculate_egn(string $egn): string
{
    $result = '';

    $year = (int) substr($egn, 0, 2);
    $month = (int) substr($egn, 2, 2);
    $day = (int) substr($egn, 4, 2);
    $gender = (int) substr($egn, 8, 1);
    $city = (int) substr($egn, 6, 3);

    if ($month > 40) {
        $year += 2000;
        $month -= 40;
    } elseif ($month > 20) {
        $year += 1800;
        $month -= 20;
    } else {
        $year += 1900;
    }

    if ($gender % 2 === 0) {
        $gender = 'мъж';
    } else {
        $gender = 'жена';
    }

    foreach (CITIES as $key => $CITY) {
        if ($city < $key) {
            $city = CITIES[$key];
            break;
        }
    }

    $result .= "Роден на: $day.$month.$year.\n";
    $result .= "Град: $city.\n";
    $result .= "Пол: $gender.\n";

    return $result;
}