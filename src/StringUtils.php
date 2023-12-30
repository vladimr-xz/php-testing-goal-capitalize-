<?php

namespace StringUtils;

function capitilize($text)
{
    if ($text === '') {
        return '';
    }
    $firstSymbol = mb_strtoupper($text[0]);
    $restOfText = substr($text, 1, null);
    return "{$firstSymbol}{$restOfText}";
}
