#!/usr/bin/php
<?php

function ft_split($str)
{
    $tab = array_filter(explode(" ", $str), 'strlen');
    sort($tab);
    return ($tab);
}
if ($argc > 1)
{
    $toret = array();
    foreach ($argv as $arg)
    {
        if ($arg != $argv[0])
        {
            $tosplit = ft_split($arg);
            $toret = array_merge($toret, $tosplit);
        }
    }
    sort($toret);
    foreach($toret as $elem)
    {
        if ($elem != "")
        {
            echo $elem;
            echo "\n";
        }
    }
}
?>