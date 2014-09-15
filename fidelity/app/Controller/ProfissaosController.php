<?php
	
	class ProfissaosController extends AppController {

		public $name = 'Profissaos';
  		public $uses  = array('Profissao');
  		public $useTable = array('profissaos');		

		//public $helpers = array('Html', 'Form', 'Js');

		public function index(){
			$this->paginate=array('limit'=>15,'order'=>array('Profissao.profissao'=>'asc'));
			$profissaos = $this->paginate('Profissao');

			$this->set(compact('profissaos'));
			$this->set('totalprof',$this->Profissao->find('count'));
		}

		public function cadastrar(){
			if($this->request->isPost()){
				if($this->Profissao->save($this->data)){
					$this->Session->setFlash('Profissão salva com sucesso!');
					$this->request->data = array();
				}
			}
		}

		public function visualizar($id = null){
			if($id && $this->request->isGet()){
				$profissao = $this->Profissao->read(null, $id);
				$this->set(compact('profissao'));
			}
		}

		public function excluir($id = null){
			if($id && $this->request->isGet()){
				if($this->Profissao->delete($id))
					$this->Session->setFlash('Profissão excluída com sucesso!');
			}
			$this->redirect($this->referer());
		}	

		public function editar($id = null){
			if($id && $this->request->isGet()){
				$this->request->data = $this->Profissao->read(null,$id);
			}else{
				if($this->Profissao->save($this->data)){
					$this->Session->setFlash('Profissão editada com sucesso!');
					$this->redirect(array('action' => 'index'));
				}
			}
		}


	}
?>



<?php
class LivrosController extends AppController {
    
  public $name = 'Livros';
  public $uses  = array('Autor', 'Genero', 'Livro');
  public $useTable = array('autores', 'generos', 'livros');

  public function index () {
    $livros = $this->Livro->find("all");
    $this->set(compact('livros'));

  }

  public function add() {
    $genero = $this->Genero->find('list', array(
      'fields' => array('Genero.genero')
      ));
    $this->set(compact('genero'));

    $autor = $this->Autor->find('list', array(
      'fields' => array('Autor.autor')
      ));
    $this->set(compact('autor'));

    if ( $this->request->isPost() ) {

      if( $this->Livro->save($this->data) ) {
        $this->Session->setflash(__('Livro cadastrado com sucesso!'), 'Message/Success');
        $this->request->data = array();
      }

    }
  }

  public function listar () {
    $livros = $this->Livro->find("all");
    $this->set(compact('livros'));
  }

  public function editar ($id = null) {
    if ( $id && $this->request->isGet() ) {
      $livros = $this->Livro->read(null, $id);
      $this->set(compact('livros'));

      $selectAutores = $this->Autor->find('list', array(
        'fields' => array('Autor.autor')
        ));
      $this->set(compact('selectAutores'));

      $selectGeneros = $this->Genero->find('list', array(
        'fields' => array('Genero.genero')
        ));
      $this->set(compact('selectGeneros'));

      $this->request->data = $this->Livro->read(null, $id);
    $this->Livro->regenerateThumbnails();
    } else {
      if( $this->Livro->save($this->data) ) {

        $this->Session->setFlash('Livro salvo');
        $this->redirect( array('action' => 'editar', $id) );
      }
    }
  }

  public function deletar ($id = null) {
    if ( $id && $this->request->isGet() ) {
      if ( $this->Livro->delete($id) ) {
        $this->Session->setFlash(__('Livro deletado com sucesso'), 'Message/Success');
      }
      $this->redirect( array('action' => 'index') );
    }
  }

    
}