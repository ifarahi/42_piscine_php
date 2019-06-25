#!/usr/bin/php
<?php

if ($argc == 4)
{
    $leftnum = trim($argv[1], " \t");
    $sign = trim($argv[2], " \t");
    $rightnum=  trim($argv[3], " \t");


    if ($sign == '+')
        echo $leftnum + $rightnum."\n";
    if ($sign == '-')
        echo $leftnum - $rightnum."\n";
    if ($sign == '*')
        echo $leftnum * $rightnum."\n";
    if ($sign == '/')
        echo $leftnum / $rightnum."\n";
    if ($sign == '%')
        echo $leftnum % $rightnum."\n";
}
else
    echo "Incorrect Parameters\n";
?>