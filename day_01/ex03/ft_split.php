#!/usr/bin/php
<?php

function ft_split($str)
{
    $str = explode(" ", $str);
    $res = array_filter($str, 'strlen');
    sort($res);
    return ($res);
}

?>