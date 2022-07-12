<?php

include('is_input_valid.php');
include('is_egn_valid.php');
include('calculate_egn.php');

echo "Здравей, тук съм за да конвертирам разшифровам ЕГН!\n";
echo "Ако искаш да прекратиш, можеш да напишеш 'quit'/'q'/'exit'.\n\n";

$input = '';

while (true)
{
    //    GETTING THE USER INPUT
    $input = str_replace(' ', '', strtolower(readline("Въведи ЕГН -> ")));

    //    QUITTING THE PROGRAM
    if ($input === 'quit' or $input === 'q' or $input === 'exit') {
        break;
    }

    //    INPUT VALIDATION
    if (!is_input_valid($input)) {
        echo "Въведената информация не е ЕГН!\n";
        continue;
    }

    if (!is_egn_valid($input)) {
        echo "Невалидно ЕГН!\n";
        continue;
    }

    //    CALCULATING THE RESULT
    $result = calculate_egn($input);

    //    PRINTING THE RESULT TO THE CONSOLE
    echo $result."\n\n";
}

echo "Надявам се да съм бил от полза!\n";
echo "До скоро!\n";