<h2>Atualizar Usuário</h2>
 
<!-- Link para listar os usuários cadastrados -->
<div class='upper-right-opt'>
	<?php echo $this->Html->link( 'Listar usuários', array( 'action' => 'index' ) ); ?>
</div>
 
<?php
	//No CakePHP os formulários são criados desta forma. Coloque os nomes EXATAMENTE como na tabela do banco de dados
	echo $this->Form->create('Usuario');
	echo $this->Form->input('nome');
	echo $this->Form->input('sobrenome');
	echo $this->Form->input('email');
	echo $this->Form->input('login');
	echo $this->Form->input('senha', array('type'=>'password'));
	echo $this->Form->end('Confirmar');
?>