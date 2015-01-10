<?php

$f = fopen('/tmp/teste.txt', 'w');
fwrite ($f, 'meu log!' . rand() . PHP_EOL);
fclose($f);
