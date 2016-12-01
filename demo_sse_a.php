<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');


$time = date('r');
echo "data: The server time is: {$time}\n\n";

dummy();

flush();


function dummy()
{

$time = date('r');
echo "data: Dummy The server time is: {$time}\n\n";
return;

}


?> 
