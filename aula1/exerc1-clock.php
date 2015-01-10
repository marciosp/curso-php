<?php

class Clock
{
	private $clock = false;

	 public function start()
	{
		$this->clock = microtime(true);
	}
	public function finish()
	{

		$this->clock = microtime(true) - $this->clock;
	}
	public function __toString()
	{
		return (string) $this->clock;
	}
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
