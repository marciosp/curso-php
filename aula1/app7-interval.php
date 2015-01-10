<?php

/*
	DateInterval
	P2D -> dois dias
	P3M -> tres meses
	PT2S -> cinco segundos

	P ... T... onde o primeiro ... pode ser N(Y,M,D,W), onde N pode ser qqr numero real e o segundo ... pode ser N(H,M,S)
	P3YT8M -> ??
*/

$i = new DateInterval('P2Y4D');
echo $i->format('%y anos e %d dias'), '<br>';

// ver no manual outros formatos

// OK, pra que Interval?

$d1 = new DateTime('2014-01-07');
$d2 = new DateTime('2015-05-04');
echo $d1->diff($d2)->format('%R%y years, %m months, %d days'), '<br>';

/*
if ($d1 == $d2) {datas iguais}
if ($d1 < $d2) { ... }
if ($d1 > $d2) { ... }
*/

// usando interval para somar ao inves de strtotime

$d1 = new DateTime();
$d1->modify('+1 month');
// ou
$d1->add(new DateInterval('P1M'));
echo $d1->format('d/m/Y'), '<br>';

// ->sub -> subtrai (mesma coisa q add)
