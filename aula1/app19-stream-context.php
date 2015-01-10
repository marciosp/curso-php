<?php

if ($_POST) die('POST enviado com sucesso: '  print_r($_POST,true));;
// POST usando file_put_contents;
$data = http_build_query(array(
	'campo1' => 'valor 1', 'campo2' => 'valor 2'
));

$opts = array(
	'http' => array(
		'method' => 'POST',
		'header' => 'Content-type : application/x-www-form-url',
		'content' => $data
	)
);
$context = stream_context_create($opts);
echo file_get_contents(
	'http://localhost/aula1/app19-stream-context.php',
	false,
	$context
);
