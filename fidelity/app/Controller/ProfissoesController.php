<?php
	
	class ProfissaosController extends AppController {

		public $name = 'Profissaos';

		public $helpers = array('Html', 'Form', 'Js');

		public function index(){
//			$this->paginate=array('limit'=>15,'order'=>array('Profissoe.profissao'=>'asc'));
			//$profissoes = $this->paginate('Profissoe');

			$this->set(compact('profissaos'));
			$this->set('totalprof',$this->Profissaos->find('count'));
		}
	}
?>