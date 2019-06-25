<?php

if ($_POST['login'] !== NULL && $_POST['passwd'] !== NULL && $_POST['login'] !== "" && $_POST['passwd'] !== ""  && $_POST['submit'] && ($_POST['submit'] === 'OK'))
{
    if (!file_exists('../private'))
        mkdir('../private');
    if (!file_exists('../private/passwd'))
        file_put_contents('../private/passwd', null);
    $accounts = unserialize(file_get_contents('../private/passwd'));
    if ($accounts)
    {
        $exits = 0;
        foreach ($accounts as $key => $value) {
            if ($value['login'] === $_POST['login'])
                $exits = 1;  
        }
    }
    if ($exits == 1)
        echo "ERROR\n";
    else 
    {
        $tmp['login'] = $_POST['login'];
        $tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
        $accounts[] = $tmp;
        file_put_contents('../private/passwd', serialize($accounts));
        echo "OK\n";
    }
}
else{
    echo "ERROR\n";
}
?>