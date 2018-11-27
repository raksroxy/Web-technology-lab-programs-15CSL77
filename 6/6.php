<?php
$file = "count.txt";
$count = strval(file_get_contents($file));
file_put_contents($file, $count+1);
echo("You are the visitor no:".$count);
?>

<!--
step1 : create count.txt
step2: grant permission to the files in order to be able to write on count.txt use the command
 
chmod 777 *
-->