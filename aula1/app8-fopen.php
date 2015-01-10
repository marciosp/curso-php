<?php

// pra ler um arquivo

$file = '/var/www/502/aula1/app8-fopen.php';
$f = fopen($file, 'r');
echo fread($f, filesize($file)); //consome mais memoria, pq joga tudo na memoria de uma vez
fclose($f);
