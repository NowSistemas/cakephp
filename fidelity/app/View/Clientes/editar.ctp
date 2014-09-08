<div id="logo">Sua Logo</div>
<hr />
<br/>
<h1>Alterar Dados dos Clientes</h1>

<?php
	echo $this->Form->create('Cliente',array('action' => 'editar')),
		 $this->Form->input('id'),
		 $this->Form->input('codcliente'),
	 	 $this->Form->input('cliente'),
		 $this->Form->end('Salvar');
?>



