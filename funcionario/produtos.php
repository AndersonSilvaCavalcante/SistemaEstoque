<?php
    include_once 'session/iniciarsessao.php';
?>
<body>
	<div class="container col-md-12">
		<table class="table text-black bg-white">
			<thead class="thead" style="background-color: #f57c00;">
				<tr class="text-white">
					<th scope="col">Código</th>
					<th scope="col">Nome Produto</th>
					<th scope="col">Fornecedor</th>
					<th scope="col">Quantidade</th>
					<th scope="col">Tipo</th>
					<th scope="col">Preço</th>
					<th scope="col">Fila</th>
					<th scope="col">Setor</th>
					<th scope="col">Bloco</th>
					<th scope="col">Data Venc.</th>
					<th scope="col">Status</th>
				</tr>
			</thead>
			<?php
			include_once 'listarprodutos.php';
			?>
		</table>
	</div>
</body>