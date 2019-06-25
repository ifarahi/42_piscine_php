#!/usr/bin/php
<?php

if ($argc == 2)
{
    $tmp = array_filter(explode(" ", $argv[1]), 'strlen');
    foreach($tmp as $elem)
    {
        if ($elem != "")
            $new_tab[]=$elem;
    }
    echo"$new_tab[0]";
    for($i=1;$i<count($new_tab);$i++)
        echo" $new_tab[$i]";
    echo"\n";
}

?>