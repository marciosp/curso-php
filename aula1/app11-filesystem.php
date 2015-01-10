<?php

chmod('tmp/teste.txt',0777);
/*
	1 executar
	2 escrever
	4 ler
	X X X, onde os X sao formados pela soma dos quatro valores acia owner, grupo, publico
*/

chown (arquivo, novodono)
chgrp (arquivo, grupoId)
print_r(stat(arquivo))
touch(arquivo)
unlink(arquivo)
copy(from, to)
rename(from, to)
link(from, atalho) muda de pasta
syslink(from, atalho) nao muda de pasta
readlink(link) -> retorna o caminho real do link
glob (? uma vez, * varias vezes, [GP]ato -> gato/pato)
