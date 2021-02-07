<?php //escopo de variaveis até onde vai a area de atuação de uma variavel variaveis locais e nos proximos exemplos variaveis de sessão , local fic apresente dentro do arquivo apenas

$nome = "glaucio";
function teste(){//se variavel nao estiver dentro do escopo nao irá funcionar entao voce deve chama-la globalmente
	global $nome;
	echo "$nome";
}

function teste2()
{
	echo "$nome". "agora no teste2";//vai gerar erro pois a variavel nao foi colocada dentro desta função é necessario colocar que ela é global dentro da função no caso do escopo
}




teste();


teste2();




?>