<?php
	
	class ProfissaosController extends AppController {

		public $name = 'Profissaos';

		public $helpers = array('Html', 'Form', 'Js');

		public function index(){
			$this->paginate=array('limit'=>15,'order'=>array('Profissao.profissao'=>'asc'));
			$profissaos = $this->paginate('Profissao');

			$this->set(compact('profissaos'));
			$this->set('totalprof',$this->Profissaos->find('count'));
		}
	}
?>