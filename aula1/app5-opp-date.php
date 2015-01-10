<?php

echo (new DateTime())->format('d/m/Y'), '<br>';
// aceita a mesma coisa que date

echo (new DateTime('1990-01-22'))->format('d/m/Y'), '<br>';
// contrutor aceita mesma coisa que strtotime

echo (new DateTime('-1 day'))->format('d/m/Y'), '<br>';
// outro exemplo

// construto do DateTime -> "strtotime"
// format -> "date"

// uma vez que criamos uma data, podemos modifica-la

$date = new DateTime();
$date->modify('+1 month'); // mesmos parametros do strtotime
echo $date->format('d/m/Y'), '<br>';

// d/m/Y -> Y-m-d
$data = '01/02/2015';
echo DateTime::createFromFormat('d/m/Y', $data)->format('Y-m-d');
