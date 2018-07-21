<?php require_once("header.php")?>


<div class="container">
	<div class="row">
		<div class="col-12 text-center">
			<h1>Cadastro de Produtos</h1>
		</div>
	</div>
	
	<div class="row">
	<!--formulario-->
		<div class="col-6">
		<!--mnsg-->
		<?php
		if(isset($_SESSION["sucesso"])){?>
		<div class="alert alert-success" role="alert">
  seu produto <b><?=$_SESSION["sucesso"];?></b> foi cadastrado com sucesso
</div>	
		<?php unset($_SESSION["sucesso"]); }  ?>
		
<!--?=$_SESSION["sucesso"];? é quando eu quero escrever algo mas rapido n precisa usar o "php" no meio e o "=" substitui o echo-->		
		
		
<!--Como anexar arquivo no php-->			
<!--1°_enctype="multipart/form-data" add isso no form(usar post em vez de get)-->		
<!--2°input type="file" e dar name-->
<!---->
<!---->
<!---->
		
						
		
		<!--fim da mnsg-->
			<form action="grava.php" method="post" enctype="multipart/form-data">
			<!--Marca-->
<div class="form-group">
<label>Marca</label>
<input type="text" name="fmarca" class="form-control" placeholder="Digite a marca da sua cerveja">
</div>
			<!--Tipo-->
			<div class="form-group">
<label>Tipo</label>
<input type="text" name="ftipo" class="form-control" placeholder="Qual o tipo da sua cerveja">
</div>
			<!--Embalagem-->
			<div class="form-group">
			<label>Embalagem</label>
			<select class="form-control" name="fembalagem">
			<option disabled selected>-- Selecione --</option>
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
				<input type="text" class="form-control" name="fpreco" id="preco" maxlength="6" placeholder="00,00"
				</div>	
				</div>
				
				
			</div>
			<!--Quantidade-->
			<div class="form-group">
				<label>Quantidade(estoque)</label>
				<input type="number" class="form-control" placeholder="0" name="fquantidade">
			</div>
			<!--Pais-->
			<div class="form-group">
				<label>Pais</label>
				<input type="text" class="form-control" placeholder="Pais de origem" name="fpais">
			</div>
			<!--Ano-->
			<div class="form-group">
				<label>Ano</label>
				<input type="text" class="form-control" placeholder="0000" name="fano">
			</div>
			<!--Descrição-->
			<div class="form-group">
				<label>Descrição</label>
				<textarea class="form-control" rows="5" placeholder="Digite sua descrição" name="fdescricao" ></textarea>
				<input type="file" name="fprod">
			</div>
			<!--Botão-->
			<div class="form-group">
				<button type="submit" class="btn btn-dark">Cadastrar</button>
			</div>
			</form>
		</div>
	<!--imagens-->
		<div class="col-6"></div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>

<?php require_once("footer.php")?>