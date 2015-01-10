<form enctype="multipart/form-data" method="POST">
File 1: <input name="meuArquivo[]" type="file" />
File 2: <input name="meuArquivo[]" type="file" />
File 3: <input name="meuArquivo[]" type="file" />
File 4: <input name="meuArquivo[]" type="file" />
<!-- OU
File: <input name="meuArquivo" type="file" multiple/>
-->
<input type="submit" value="Enviar" />
</form>
<?php

if ($_FILES) {
	$dir = '/var/www/502/uploads/';
	$fileInfo = $_FILES['meuArquivo'];
	foreach ($fileInfo['name'] as $ => $name) [
		if (move_uploaded_file(
			$fileInfo['tmp_name'][$k],
			$dir . $name;
		)) {
			echo 'enviou';
		} else {
			die('erro');
		}
	}
}
