<?php
require_once("conecta.php");
 $id = $_POST["id"];
 $a = $_POST["fmarca"];
 $b = $_POST["ftipo"];
 $c = $_POST["fembalagem"];
 $d = $_POST["fpreco"];
 $e = $_POST["fquantidade"];
 $f = $_POST["fpais"];
 $g = $_POST["fano"];
 $h = $_POST["fdescricao"];

$sql="UPDATE cerveja SET marca='$a',tipo='$b',embalagem='$c',preco='$d',quantidade='$e',pais='$f',ano='$g',descricao='$h' 
WHERE id='$id'";

mysqli_query($conexao,$sql);
header("location:produtos.php");


?>