<?php

$a =30;
$b =55;
var_dump($a > $b); // retorna se a é maior que b de forma boleana no caso true false
echo "<br>";
var_dump($a < $b);// retorna se a é menor que b de forma boleana true or false
echo "<br>";

var_dump($a == $b);// um = é atribuição == dois sao comparação ´porem comparação de vlaor nao tipo
echo "<br>"; 

var_dump($a === $b);// com 3 iguais é igualdade de identidade ou seja compara tipo e valor 
echo "<br>";
var_dump($a != $b); //diferente o ! é negação voce diz que a nao é igual nesse caso valida o valor apenas
	echo "<br>";

var_dump($a !== $b); // nesse caso ele ira validar a identidade o tipo e valor dos dados

echo "<br>";
// todos retornam boleano true or false 

?>