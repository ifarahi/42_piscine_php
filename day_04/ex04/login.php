<?php 
session_start();
include('auth.php');
if (auth($_POST['login'], $_POST['passwd']) == false)
{
    $_SESSION['loggued_on_user'] = "";
    header('location: index.html');
    echo "ERROR\n";
}
else
{
    $_SESSION['loggued_on_user'] = $_POST['login'];
}
?>
<html>
    <body>
    <iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
    <iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>
    </body>
</html>