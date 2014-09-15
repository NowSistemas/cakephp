<?php header("Content-Type: text/html; charset=ISO-8859-1", true); ?>

<h3>Cadastro de Profissões .::. Total de profissões cadastradas: <?php echo $totalprof; ?></h3>
<hr />
<table>
	<tr>
		<td width="5%"><?php echo $this->Html->link('Novo','/profissaos/cadastrar',array('class' => 'button','target' => '_self')); ?></td>
		<td width="5%"><?php echo $this->Html->link('Voltar','/',array('class' => 'button','target' => '_self')); ?></td>
		<td width="90%"></td>
	</tr>
</table>


<table id="tblProfissoes">
	<tr>
		<th>Codigo</th>
		<th><?=$this->Paginator->sort('profissao');?></th>
		<th>Ações</th>
	</tr>

	<?php foreach ($profissaos as $profissao) { ?>
		<tr>
			<td><?php echo $profissao['Profissao']['id']?></td>
			<td><?php echo $profissao['Profissao']['profissao']?></td>
			<td>
				<?php echo $this->Html->link('A',array('action'=>'editar',$profissao['Profissao']['id']));?>
				<?php echo $this->Html->link('E',array('action'=>'excluir',$profissao['Profissao']['id']),null,'Deseja realmente excluir esta profissão?');?>
				<?php echo $this->Html->link('V',array('action'=>'visualizar',$profissao['Profissao']['id']));?>
			</td>
		</tr>
	<?php } ?>
</table>

<?=$this->Paginator->prev(' << ', array(), NULL, array('class' => 'disabled'));?>
<? echo "    ";?>
<?=$this->Paginator->numbers();?>
<? echo "    ";?>
<?=$this->Paginator->next(' >> ', array(), NULL, array('class' => 'disabled'));?>

