<?php

function str_starts_with($haystack, $needle)
{
    return strpos($haystack, $needle) === 0;
}


function paths_match($path1, $path2): bool
{
    $array1 = explode('/', $path1);
    $array2 = explode('/', $path2);
    if (count($array1) != count($array2)) {
        return false;
    }

    for ($i = 0; $i < count($array1); $i++) {
        if (str_starts_with($array1[$i], ':') ||  str_starts_with($array2[$i], ':')) {
        } else if (strcmp($array1[$i], $array2[$i]) !== 0) {
            return false;
        }
    }
    return true;
}
