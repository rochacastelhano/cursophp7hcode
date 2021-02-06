<?php

//tipoes de dados primeiro abaixo string, textos tem aspas numeros nao se colocar em um numero ela vai ser uma string 
//tipos simples
$nome = "hcode";

$site = 'www.hcode.com.br';//


$ano = 1990;

$salario= 5500.99;

$bloqueado = false;



///////////////////////////////////
//tipos compostos 
$frutas  = array("abacaxi", "laranja", "manga");

//echo $frutas[2]; //entre os conlchetes vai a posição do item dentro do array lembrando que a contagem sempre começa em zero na programação
//echo "<br>";
$nascimento = new DateTime();
//var_dump($nascimento);



//////////////////////////////////
// tipos especiais
$arquivo = fopen("exemplo-03.php", "r");
//var_dump($arquivo);


/*tipos de dados no php são oito tipos divididos em 3 grupos 
tipo basico
tipo composto 
tipo especial
dentro dos especiais ainda existe o nulo e vazia abaixo pra entender a diferença
*/
// abaixo como deixar uma variavel em nulo 
$nulo = NULL;

$vazia= "";//nulo é ausencia de valor e vazio ele foi iniciado porem nao tem info quando voce destroi  uma variavel ela se torna nula 




?>