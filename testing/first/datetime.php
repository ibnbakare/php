<?php

//namespace first;

require_once  "../vendor/autoload.php";

$datetime = new DateTime("tomorrow 4.15pm");
echo  $datetime->format("d/M/Y h:i A");
//var_dump($datetime);





