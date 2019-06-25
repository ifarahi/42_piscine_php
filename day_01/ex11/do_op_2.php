#!/usr/bin/php
<?php

function ft_operator($s)
{
    if ($s == '+' || $s == '-' || $s == '*' || $s == '/' || $s == '%')
        return TRUE;
    else
        return FALSE;
}

if ($argc == 2)
{

    $arr = sscanf($argv[1], " %f %c %f %s");
    if (!is_numeric($arr[0]) || !is_numeric($arr[2]) || !ft_operator($arr[1]) || $arr[3] != "")
        echo "Syntax Error\n";
    else
    {
        if ($arr[1] == '+')
            echo $arr[0] + $arr[2]."\n";
        if ($arr[1] == '-')
            echo $arr[0] - $arr[2]."\n";
        if ($arr[1] == '*')
            echo $arr[0] * $arr[2]."\n";
        if ($arr[1] == '/')
            echo $arr[0] / $arr[2]."\n";
        if ($arr[1] == '%')
            echo $arr[0] % $arr[2]."\n";
    }
}
else
    echo "Incorrect Parameters\n";
?>