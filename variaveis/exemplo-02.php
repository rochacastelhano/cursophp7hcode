<?php
// variaveis em php sao case sensitive procure sempre cirar uma varivael dessa forma e escrever(chamar) desta forma , crie variaveis autoexplicativas isso vai facilitar pra caralho 
//voce pode usar numeros em uma variavel apenas no final ou no meio nunca no inicio caracter especial permitido em uma variavel é o _
//comentario podem ser feito em linha 
/*

ou em blocos assim */ 

$anoNascimento = 1990;
$sobrenome = "rangel";
$nome1="joao";
/*
abaixo um exemplo de como limpar uma variavel 
no caso redefinilia e tambem colocando uma função echo 
com if isset ou seja se ela existe mostrar na tela*/

echo "$nome1";
echo "<br>";
//unset($nome1);
//if (isset($nome1)) {
	//echo "$nome1";
	# code...
//}


//abaixo exemplo de concatenação onde juntaremos duas variaveis 
$nomeCompleto= $nome1 . " " . $sobrenome; //se colocar apenas o ponto nao ficara com espaço pois nas variaveis nao possui espaço entao colacasse aspas duplas com espaço e concatena novamente

echo "$nomeCompleto";


?>