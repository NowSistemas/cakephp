<h2>Cadastro de Clientes</h2>
<p style="font-size: 100%;">Total de clientes cadastrados: <?php echo $totalcli; ?></p>
<?=$this->Paginator->prev('<< Anterior', array(), NULL, array('class' => 'disabled'));?>
<?=$this->Paginator->numbers();?>
<?=$this->Paginator->next('Próximo >>', array(), NULL, array('class' => 'disabled'));?>
<br>

<table>
	<tr>
		<th>Codigo</th>
		<th>Cliente</th>
		<th>Pontos</th>
		<th>Endereço</th>
		<th>Bairro</th>
		<th>Cidade</th>
		<th>UF</th>
		<th>Ações</th>
	</tr>

	<?php foreach ($clientes as $cliente) { ?>
		<tr>
			<td><?php echo $cliente['Cliente']['id']?></td>
			<td><?php echo $cliente['Cliente']['cliente']?></td>
			<td><?php echo $cliente['Cliente']['pontos']?></td>
			<td><?php echo $cliente['Cliente']['endereco']?></td>	
			<td><?php echo $cliente['Cliente']['bairro']?></td>
			<td><?php echo $cliente['Cliente']['cidade']?></td>
			<td><?php echo $cliente['Cliente']['uf']?></td>
			<td>
				<?php echo $this->Html->link('A',array('action'=>'editar',$cliente['Cliente']['id']));?>
				<?php echo $this->Html->link('E',array('action'=>'excluir',$cliente['Cliente']['id']),null,'Deseja realmente excluir este cliente?');?>
			</td>
		</tr>
	<?php } ?>
</table>
<?php
echo $this->Paginator->prev('« Mais novas', null, null, array('class' => 'desabilitado'));
echo $this->Paginator->numbers();
echo $this->Paginator->next('Mais antigas »', null, null, array('class' => 'desabilitado'));
?>