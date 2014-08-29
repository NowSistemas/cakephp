<h2>Novo Cliente</h2>
<?php 
	echo $this->Form->create('Cliente',array('action' => 'cadastrar')),
		 $this->Form->input('cliente'),
		 $this->Form->input('sexo'),
		 $this->Form->input('endereco'),
		 $this->Form->end('Salvar');
?>