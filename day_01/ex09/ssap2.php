#!/usr/bin/php
<?php

function ft_split($str)
{
    $tab = array_filter(explode(" ", $str), 'strlen');
    return ($tab);
}

function ft_sort($str1, $str2)
{
    $table = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\\]^_`{|}~";
    $i = 0;
    $str1 = strtolower($str1);
    $str2 = strtolower($str2);

    while (ord($str1[$i]) && ord($str2[$i]))
    {
        if (strpos($table, $str1[$i]) > strpos($table, $str2[$i]))
            return 1;
        if (strpos($table, $str1[$i]) < strpos($table, $str2[$i]))
            return -1;
        $i++;
    }
    if (strlen($str1) > strlen($str2))
        return 1;
    return 0;
}

$stock = array();
foreach ($argv as $arg)
{
    if ($arg != $argv[0])
    {
        $tosplit = ft_split($arg);
        $stock = array_merge($stock, $tosplit);
    }
}
usort($stock, 'ft_sort');
foreach ($stock as $elem)
{
    echo $elem."\n";
}
?>