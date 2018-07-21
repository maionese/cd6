<?php

$enderecoDB="localhost";
$loginDB="root";
$senhaDB="";
$nomeDB="1862-php";

$conexao= mysqli_connect($enderecoDB,$loginDB,$senhaDB,$nomeDB);

mysqli_query($conexao, "SET NAMES 'utf8'");
mysqli_query($conexao, "SET character_set_connection=utf8");
mysqli_query($conexao, "SET character_set_client=utf8");
mysqli_query($conexao, "SET character_set_results=utf8");




//mysqli_connect para conecta ao banco de dados as informações
if(!$conexao){
	echo "Erro ao conectar DB";
}//else{
//	echo "Conectados com sucesso";
//}
?>