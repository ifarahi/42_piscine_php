<?php
function auth($login, $passwd)
{
    if ($login === NULL || $passwd === NULL)
        return false;
    $account = unserialize(file_get_contents('../private/passwd'));
    foreach ($account as $k => $v) {
        if ($v['login'] === $login && $v['passwd'] === hash('whirlpool', $passwd))
            return true;
        else
            return false;
    }
}
?>