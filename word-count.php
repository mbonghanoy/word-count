<?php

function wordCount($textFile)
{
    $replaced = str_replace(['?',";",',','`','-','!',"'",')','(','.',':','"']," ",$textFile);
    $loweredCase = strtolower($replaced);
}

$alice = file_get_contents('alice.txt');
wordCount($alice);
