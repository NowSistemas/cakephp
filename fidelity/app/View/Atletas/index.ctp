<h2>Atletas</h2>
 
<!-- Link para a criação de novos usuários -->
<div class='upper-right-opt'>
	<?php echo $this->Html->link( '+ Criar usuário', array( 'action' => 'criar' ) ); ?>
</div>
 
<table>
	<!-- Nome das colunas -->
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Sobrenome</th>
		<th>Login</th>
		<th>Email</th>
		<th>Ações</th>
	</tr>
<?php
 
	//Correr por todos os registros cadastrados
	foreach( $usuarios as $usuario ){
 
	echo "<tr>";
	echo "<td>{$usuario['Usuario']['id']}</td>";
	echo "<td>{$usuario['Usuario']['nome']}</td>";
	echo "<td>{$usuario['Usuario']['sobrenome']}</td>";
	echo "<td>{$usuario['Usuario']['login']}</td>";
	echo "<td>{$usuario['Usuario']['email']}</td>";
 
	//Aqui estão os links de atualização e exclusão
	echo "<td class='actions'>";
	echo $this->Html->link( 'Editar', array('action' => 'atualizar', $usuario['Usuario']['id']) );
 
	//Para aumentar a segurança, utiliza-se o método POST ao invés de GET
	echo $this->Form->postLink('Excluir', array('action' => 'excluir',$usuario['Usuario']['id']), array('confirm'=>'Você tem certeza de que deseja excluir este usuário?' ) );
	echo "</td>";
	echo "</tr>";
	}
?>
 
</table>