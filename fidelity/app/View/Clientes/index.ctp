<?php header("Content-Type: text/html; charset=ISO-8859-1", true); ?>

<h3>Cadastro de Clientes .::. Total de clientes cadastrados: <?php echo $totalcli; ?></h3>
<hr />
<table>
	<tr>
		<td width="5%"><?php echo $this->Html->link('Novo','/clientes/cadastrar',array('class' => 'button','target' => '_self')); ?></td>
		<td width="5%"><?php echo $this->Html->link('Voltar','/',array('class' => 'button','target' => '_self')); ?></td>
		<td width="90%"></td>
	</tr>
</table>


<table id="tblClientes">
	<tr>
		<th>Codigo</th>
		<th><?=$this->Paginator->sort('cliente');?></th>
		<th><?=$this->Paginator->sort('pontos');?></th>
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
				<?php echo $this->Html->link('V',array('action'=>'visualizar',$cliente['Cliente']['id']));?>
			</td>
		</tr>
	<?php } ?>
</table>

<?=$this->Paginator->prev(' << ', array(), NULL, array('class' => 'disabled'));?>
<? echo "    ";?>
<?=$this->Paginator->numbers();?>
<? echo "    ";?>
<?=$this->Paginator->next(' >> ', array(), NULL, array('class' => 'disabled'));?>


