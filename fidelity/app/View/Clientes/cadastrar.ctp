<h1>Cadastrar novo cliente</h1>

<?php
	echo $this->Form->create('Cliente',array('action' => 'cadastrar')),
		 $this->Form->input('codcliente'),
	 	 $this->Form->input('cliente'),
		 $this->Form->end('Novo Cliente');
?>