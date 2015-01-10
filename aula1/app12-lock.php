<?php

$f = fopen('/tmp/teste.txt', 'w');
if (flock($f, LOCK_EX)) {
	fwrite($f, 'Hello World' . PHP_EOL);
	flock($f, LOCK_UN);;
} else {
	die('erro nao pode criar o lock');
}
fclose($f);
/*

LOCK_SH -> shared -> compartilhado para leitura
LOCK_EX -> exclusivo -> para escrita
LOCK_UN - libera um lock
*/
