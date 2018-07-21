<?php require_once("header.php")?>

<div class="container">
	<div class="row">
		<div class="col-12 text-center">
			<h1>Produtos</h1>
		</div>
	</div>



<div class="row">
	<div class="col-6"></div>
	
	<div class="col-6 text-right">
	<a href="cadastro.php">
		<button type="button" class="btn btn-success">
			<i class="fas fa-plus"></i>
		Cadastrar
		</button>
		</a>
	</div>
</div>

<!--LISTA-->
<br>
<div class="row">
	<div class="col-12 text-center">
		<table class="table">
			<thead class="thead-dark">
				<th scope="col">#Marca</th>
				<th scope="col">#Embalagem</th>
				<th scope="col">#Preço</th>
				<th scope="col">#Estoque</th>
				<th scope="col">#País</th>
				<th scope="col">#Ano</th>
				<th scope="col" colspan="2">#Alteração</th>
			</thead>
			<tbody id="list">
			<!--lista de produtos-->
			<?php
			require_once("conecta.php");
            $palmito="SELECT * FROM cerveja";
			$ativar= mysqli_query($conexao,$palmito);
            while($campo= mysqli_fetch_array($ativar)){ ?>
				<tr>
					<td><?=$campo["marca"]?></td>
					<td><?=$campo["embalagem"]?></td>
					<td>R$<?=$campo["preco"]?></td>
					<td><?=$campo["quantidade"]?></td>
					<td><?=$campo["pais"]?></td>
					<td><?=$campo["ano"]?></td>
					<!--alterar-->
					<td>
						<a href="alterar.php?cod=<?=$campo['id']?>" class="alt">Alterar</a>
					</td>
					<!--excluir-->
					<td>
						<a href="#" class="exc" onClick="excluir('<?=$campo['id']?>')">Excluir</a>
					</td>
				</tr>
				
				
			<?php }?>
			</tbody>
		</table>
	</div>
</div>




</div>
<script>
function excluir(pipoca){
	if(confirm("Tem certeza que deseja excluir este item?")){
		window.location="excluir.php?cod="+pipoca;
	}
}
</script>

<?php require_once("footer.php")?>