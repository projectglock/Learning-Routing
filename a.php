<?php

echo 'это a';

$requestedURL=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$requestTime=date('H:i:s d-m-Y', $_SERVER['REQUEST_TIME']);
$userIP=$_SERVER['REMOTE_ADDR'];
$userAgent=$_SERVER['HTTP_USER_AGENT'];
file_put_contents('logs/a.log',$requestedURL.' '.$requestTime.' '.$userIP.' '.$userAgent.PHP_EOL, FILE_APPEND);
//использую относительный путь, т.к. по идее папка logs будет всегда на своём месте