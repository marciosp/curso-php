<form enctype="multipart/form-data" method="POST">
File: <input name="meuArquivo" type="file" />
<input type="submit" value="Enviar" />
</form>
<?php

if ($_FILES) {
	$dir = '/var/www/502/uploads/';
	$fileInfo = $_FILES['meuArquivo'];
	if (move_uploaded_file(
		$fileInfo['tmp_name'],
		$fir . $fileInfo['tmp_name']
	)) {
		echo 'enviou';
	} else {
		die('erro');
	}

}
