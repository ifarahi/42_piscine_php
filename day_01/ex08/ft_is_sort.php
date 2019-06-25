#!/usr/bin/php
<?php

function ft_is_sort($arr)
{
    $sort = $arr;
    sort($sort);
    $rsort = $arr;
    rsort($rsort);
    if ($sort == $arr || $rsort == $arr)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}
?>