#!/usr/bin/php
<?php

function ft_sort($arr)
{
    foreach ($arr as $elem)
    {
        $newtab[] = $elem;
    }
    return ($newtab);
}
if ($argc > 1)
{
    $tab = array_filter(explode(" ", $argv[1]), 'strlen');
    $cont = ft_sort($tab);
    $i = 1;
    $lenght = count($cont);
    while ($lenght - 1 > 0)
    {
        echo $cont[$i++]." ";
        $lenght--;
    }
    echo $cont[0]."\n";
}
?>