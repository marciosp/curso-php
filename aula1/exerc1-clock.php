<?php

class Clock
{


}

$clock = new Clock();
$clock->start();


//codigo a  ser testadoo
$a = 0;
for ($i = 0; $i < 10000; ++$i) {
	$a += pow($i, 2);
}
//fim de codigo a ser testado

$clock->finish();
echo $clock;
