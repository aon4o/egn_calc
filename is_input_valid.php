<?php

function is_input_valid(string $egn): bool
{
    if (strlen($egn) !== 10) {
        return false;
    }

    if (strlen((int) $egn) < 9) {
        return false;
    }

    return true;
}