<?php

function wordCount($textFile)
{
    $replaced = str_replace(['?',";",',','`','-','!',"'",')','(','.',':','"']," ",$textFile);
    $loweredCase = strtolower($replaced);
    $count = array_count_values(str_word_count($loweredCase, 1));
    arsort($count);
    $top = array_slice($count, 0, 10);
    print_r($top);
}

$alice = file_get_contents('alice.txt');
wordCount($alice);
