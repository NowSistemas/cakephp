<h2>Clientes</h2>

<table>
	<tr>
		<th>Cliente</th>
		<th>Sexo</th>		
		<th>Endereço</th>
	</tr>
	<?  foreach($clientes as $cliente); ?>
		<tr>
			<td><?=$cliente['Cliente']['cliente']?></td>
			<td><?=$cliente['Cliente']['sexo']?></td>
			<td><?=$cliente['Cliente']['endereco']?></td>
		</tr>
	<? endforeach;?>
<table>	