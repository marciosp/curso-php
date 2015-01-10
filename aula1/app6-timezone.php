<?php

echo (new DateTime(
		null,
		new DateTimeZone('America/New_York')
	))->format('d/m/Y H:i:s');
