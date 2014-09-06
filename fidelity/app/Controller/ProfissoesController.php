<?php
	
	class ProfissoesController extends AppController {

		public $name = 'Profissoes';

		public $helpers = array('Html', 'Form', 'Js');

		public function index(){
			$this->paginate=array('limit'=>15,'order'=>array('Cliente.cliente'=>'asc'));
			$clientes = $this->paginate('Cliente');

			$this->set(compact('clientes'));
			$this->set('totalcli',$this->Cliente->find('count'));
		}

		public function cadastrar(){
			if($this->request->isPost()){
				if($this->Cliente->save($this->data)){
					$this->Session->setFlash('Cliente salvo com sucesso!');
					$this->request->data = array();
				}
			}
		}

		public function editar($id = null){
			if($id && $this->request->isGet()){
				$this->request->data = $this->Cliente->read(null,$id);
			}else{
				if($this->Cliente->save($this->data)){
					$this->Session->setFlash('Cliente editado com sucesso!');
					$this->redirect(array('action' => 'index'));
				}
			}
		}

		public function excluir($id = null){
			if($id && $this->request->isGet()){
				if($this->Cliente->delete($id))
					$this->Session->setFlash('Cliente excluído com sucesso!');
			}
			$this->redirect($this->referer());
		}

		public function visualizar($id = null){
			if($id && $this->request->isGet()){
				$cliente = $this->Cliente->read(null, $id);
				$this->set(compact('cliente'));
			}
		}
	}
?>