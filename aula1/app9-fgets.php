<?php

// pra ler um arquivo

$file = '/var/www/502/aula1/app8-fopen.php';
$f = fopen($file, 'r');
while (false !== ($line = fgets($f))) {  //metodo melhor, pq cada linha vai pra memoria, nao sobrecarregando
	echo $line, '<br>';
}
fclose($f);
