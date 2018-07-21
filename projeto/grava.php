<?php
require_once("conecta.php");
session_start();

$a = $_POST["fmarca"];
$b = $_POST["ftipo"];
$c = $_POST["fembalagem"];
$d = $_POST["fpreco"];
$e = $_POST["fquantidade"];
$f = $_POST["fpais"];
$g = $_POST["fano"];
$h = $_POST["fdescricao"];
$capa=$_FILES["fprod"]["name"];

$ext=pathinfo($capa,PATHINFO_EXTENSION);
//extensão automatica ele sabe se é png,gif,txt,jpg,etc


$tempo=time();

$novonome=md5($capa.$tempo).".".$ext;
//criptografias: md5(), sha1()




move_uploaded_file($_FILES["fprod"]["tmp_name"],"produtos/$novonome");
//este comando move o arquivo selecionado o nome do arquivo "fprod" , o tmp_name é um arquivo temporario q este cod cria, e o produtos/$capa é pra saber onde e oq vai criar





$palmito="INSERT INTO cerveja(marca,tipo,embalagem,preco,quantidade,pais,ano,descricao,img) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$novonome')";

$grava=mysqli_query($conexao,$palmito);
//para o mysql transformar esse texto em codigo sql, pq o php n entende o que slq quer dizer no codigo dele//
//mysqli_error($conexao) <--Mostra o q ta dando errado na conexão com o banco de dados(o $conexao é só pq é a var q faz a conexão, se o nome for outra é só mudar ali.)//

if($grava){
	
$_SESSION["sucesso"]=$a;
	header("location:cadastro.php");
}else{
	$erro= mysqli_error($conexao);
	$_SESSION["erro"]=$erro;
	header("location:cadastro.php");
}


















?>