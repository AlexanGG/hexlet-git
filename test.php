<?php

function getChunked($array)
{
    if (empty($array)) {
        return [];
    }

    foreach ($array as $arr) {
        if (!is_array($arr)) {
            continue;
        }
        $result = array_chunk($arr, 2, true);
    }
    return $result;
}

getChunked(['a', 'b', 'c', 'd']);