<div id="logo">Sua Logo</div>
<hr />
<br/>
<?php echo $this->Form->create('profissao');?>
<fieldset>
	<legend>Alterar Dados .::. Profissão</legend>
	<?php
	    echo $this->Form->input('id');
	    echo $this->Form->input('profissao');
	?>
</fieldset>
<?php $this->Form->end('Salvar'); ?>