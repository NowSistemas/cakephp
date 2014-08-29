<?php
	class ClientesController extends AppController{

		public $name = 'Clientes';

		public function index(){
			$clientes = $this->Cliente->find('all');
			$this->set(compact('Clientes'));
		}

		public function cadastrar(){
			if ($this->request->isPost()){
				if($this->Cliente->save($this->data)){
					$this->Session->setFlash('Cliente salvo com sucesso!');
					$this->request->data = array();
				}

			}
		}
	}
?>