<h1>Cadastrar nova Profissão</h1>

<?php
	echo $this->Form->create('Profissao',array('action' => 'cadastrar')),
		 $this->Form->input('codprofissao'),
	 	 $this->Form->input('profissao'),
		 $this->Form->end('Nova Profissão');
?>