<?php

$clock = false;

function clock_start()
{
	global $clock;
	$clock = microtime(true);
}
function clock_finish()
{
	global $clock;
	$clock = microtime(true) - $clock;
}
function myFunction()
{
	$pot = 2;
	for ($i = 0; $i < 10000;  ++$i) $pot +=2;
	return $pot;
}
clock_start();
echo ' result: ', myFunction();
clock_finish();
echo '<br/>', $clock;
