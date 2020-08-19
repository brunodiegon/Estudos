<?php

$anoNascimento = 1986;
$nomeCompleto = "Bruno Diego Naressi";
// Na Linha abaixo temos uma variavel 

$nome1 = "Bruno";
$sobrenome = "Naressi";

$nomeCompleto = $nome1 . " " .$sobrenome;

echo $nome1;

echo "<br/>";

unset($nome1);

if (isset($nomeCompleto)) {

	echo $nomeCompleto;
}
?>