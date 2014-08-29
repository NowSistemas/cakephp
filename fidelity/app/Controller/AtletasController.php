//Declaração da Classe. NÃO FECHE ESTA CLASSE, vamos fechar no final das funções.
	class AtletasController extends AppController {
 
		public function criar(){
 
			//Checar se a requisição é do tipo POST. Isto evita o usuário de inserir dados nulos.
			if ($this->request->is('post')){
 
				//Salvando novo usuário
				if ($this->Atleta->save($this->request->data)){
 
					//Enviando uma mensagem ao usuário
					$this->Session->setFlash('Atleta criado com sucesso =)');
 
					//Redirecionando para a lista de usuários
					$this->redirect(array('action' => 'index'));
 
				}else{
 
					//Se houver falha
					this->Session->setFlash('Falha na criação do Atleta =(');
 
				}
			}
		}

		public function index() {
 
			$this->set('atletas', $this->Atleta->find('all'));
 
		}

		public function atualizar() {
 
			//Pegando o código do atleta que vai ser atualizado e apontando na variável $id
			$id = $this->request->params['pass'][0];
 
			//Apontando o codigoUsuario do usuário para atualização
			$this->Atleta->id = $id;
 
			//Checando se o atleta existe
			if( $this->Atleta->exists() ){
 
				//Checando se a requisição feita é do tipo post ou put
				if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
 
					//Salvando o atleta
					if( $this->Atleta->save( $this->request->data ) ){
 
					//Enviando uma mensagem para o atleta
					$this->Session->setFlash('Atleta atualizado com sucesso =)');
 
					//Redirecionando para a tela inicial
					$this->redirect(array('action' => 'index'));
 
					}else{
 
					//Caso ocorra um erro na atualização do atleta
					$this->Session->setFlash('Falha na atualização do atleta =(');
 
					}
 
				}else{
 
				//Se não foi uma requisição do tipo post ou put, coloca-se os dados do atleta no formulário da view automaticamente
				$this->request->data = $this->Atleta->read();
 
				}
 
			}else{
 
				//Se o atleta não existe enviar uma mensagem que o atleta é inexistente
				$this->Session->setFlash('O atleta que você está desejando atualizar não existe =(');
 
				//E redirecionar para a listagem de atletas
				$this->redirect(array('action' => 'index'));
			}   
		}

		public function excluir() {
 
			//Pegando o código do atleta que vai ser atualizado e apontando na variável $id
			$id = $this->request->params['pass'][0];
 
			//Checando se a requisição é do tipo GET. Neste caso precisamos que a requisição seja do tipo post, pois usamos o método postLink na view que deleta o usuário 
			if( $this->request->is('get') ){
 
				//Enviando uma mensagem para o usuário
				$this->Session->setFlash('Não é permitido excluir atletas através do método GET =(');
 
			}else{
 
				//Checando se o id do atleta é válido
				if(!$id ) {
 
					//Enviando uma mensagem para o usuário
					$this->Session->setFlash('Código de atleta inválido =(');
 
				}else{
 
					//Excluindo atleta
					if( $this->Atleta->delete( $id ) ){
 
						//Enviando uma mensagem para o usuário
						$this->Session->setFlash('Atleta excluído com sucesso =)');
 
					}else{  
 
						//Se não for possível excluir o atleta, enviar mensagem
						$this->Session->setFlash('Falha na excluão do atleta =(');
 
					}
				}
			}
 
			//Redirecionando para a listagem de atletas
			$this->redirect(array('action' => 'index'));
		}
	}//Fechando a classe UsuariosController