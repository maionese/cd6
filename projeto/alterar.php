<?php require_once("header.php")?>


<div class="container">
	<div class="row">
		<div class="col-12 text-center">
			<h1>Alterar Produto</h1>
		</div>
	</div>
	
	<div class="row">
	<!--formulario-->
		<div class="col-6">
		<!--mnsg-->
		<?php
		if(isset($_SESSION["sucesso"])){?>
		<div class="alert alert-success" role="alert">
  seu produto <b><?=$_SESSION["sucesso"];?></b> foi alterado com sucesso
</div>	
		<?php unset($_SESSION["sucesso"]); }  ?>
		
<!--?=$_SESSION["sucesso"];? é quando eu quero escrever algo mas rapido n precisa usar o "php" no meio e o "=" substitui o echo-->		
		
		
<!--criar,gravar,listar,alterar,excluir,-->
		
		
		
		<!--fim da mnsg-->
<?php
require_once("conecta.php");
			$xuxa= $_GET["cod"];
			$sql= "SELECT * FROM cerveja WHERE id='$xuxa'";
			$ativar= mysqli_query($conexao,$sql);
			$campo= mysqli_fetch_array($ativar);
?>		
		
		
			<form action="altgrava.php" method="post">
			<input type="hidden" name="id" value="<?=$campo['id']?>"
			<!--Marca-->
<div class="form-group">
<label>Marca</label>
<input type="text" name="fmarca" class="form-control" placeholder="Digite a marca da sua cerveja" value="<?=$campo['marca']?>">
</div>
			<!--Tipo-->
			<div class="form-group">
<label>Tipo</label>
<input type="text" name="ftipo" class="form-control" placeholder="Qual o tipo da sua cerveja" value="<?=$campo['tipo']?>">
</div>
			<!--Embalagem-->
			<div class="form-group">
			<label>Embalagem</label>
			<select class="form-control" name="fembalagem">
			<option disabled selected value="<?=$campo['embalagem']?>"><?=$campo['embalagem']?></option>
			<option value="350">350 ml</option>	
			<option value="600">600 ml</option>	
			<option value="1000">1 L</option>	
			<option valeu="1500">1.5 L</option>	
			</select>
				</div>
			<!--Preço-->
			<div class="form-group">
				<label>Preço</label>
				<div class="input-group mb-2">
				<div class="input-group-prepend">
				<div class="input-group-text">$
				</div>
				<input type="text" class="form-control" name="fpreco" id="preco" maxlength="6" placeholder="00,00" value="<?=$campo['preco']?>"> 
				</div>	
				</div>
				
				
			</div>
			<!--Quantidade-->
			<div class="form-group">
				<label>Quantidade(estoque)</label>
				<input type="number" class="form-control" placeholder="0" name="fquantidade" value="<?=$campo['quantidade']?>">
			</div>
			<!--Pais-->
			<div class="form-group">
				<label>Pais</label>
				<input type="text" class="form-control" placeholder="Pais de origem" name="fpais" value="<?=$campo['pais']?>">
			</div>
			<!--Ano-->
			<div class="form-group">
				<label>Ano</label>
				<input type="text" class="form-control" placeholder="0000" name="fano" value="<?=$campo['ano']?>">
			</div>
			<!--Descrição-->
			<div class="form-group">
				<label>Descrição</label>
				<textarea class="form-control" rows="5" placeholder="Digite sua descrição" name="fdescricao" ><?=$campo['descricao']?></textarea>
			</div>
			<!--Botão-->
			<div class="form-group">
				<button type="submit" class="btn btn-dark">Alterar</button>
			</div>
			</form>
		</div>
	<!--imagens-->
		<div class="col-6"></div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>

<?php require_once("footer.php")?>