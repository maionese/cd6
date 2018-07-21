<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="css/style.css">
<link type="text/css" rel="stylesheet" href="css/fontawesome-all.min.css">
</head>

<body>
<!--menu-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
		
<li class="nav-item">
<a href="painel.php" class="nav-link">
<i class="fas fa-tachometer-alt"></i>
Painel
</a>
</li>
   
<li class="nav-item">
<a href="produtos.php" class="nav-link">
	<i class="fas fa-beer"></i>
	Produtos
</a>
</li>
   
    </ul>
  </div>
</nav>
<!--fim do menu-->