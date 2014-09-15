<div id="logo">Sua Logo</div>
<hr />
<br/>
<?php echo $form->create('Cliente');?>
<fieldset>
	<legend>Alterar Dados dos Clientes</legend>
	<?php
	    echo $form->input('id');
	    echo $form->input('codcliente');
	    echo $form->input('cliente');
	?>
</fieldset>
<?php $form->end('Salvar'); ?>
