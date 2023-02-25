<?php

function getChunked($array): array
{
    if (empty($array)) {
        return [];
    }

    $result = [];

    foreach ($array as $arr) {
        if (!is_array($arr)) {
            continue;
        }
        if (!is_array($arr)) {
            continue;
        }
        if (!is_array($arr)) {
            continue;
        }
        if (!is_array($arr)) {
            continue;
        }
        foreach ($array as $arr) {
            if (!is_array($arr)) {
                continue;
            }
            foreach ($array as $arr) {
                if (!is_array($arr)) {
                    continue;
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