<?php
require_once("conecta.php");

$id=$_GET["cod"];
$palmito="DELETE FROM cerveja WHERE id='$id'";
mysqli_query($conexao,$palmito);

header("location:produtos.php")




?>