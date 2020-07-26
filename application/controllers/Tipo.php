<?php

use Application\core\Controller;

class Tipo extends Controller {

	/**
	 * chama a view index.php da seguinte forma /user/index   ou somente   /user
	 * e retorna para a view todos os usuários no banco de dados.
	 */
	public function index() {
		$Tipos = $this->model('Tipo'); // é retornado o model Users()
		$data = $Tipos::findAll();
		$this->view('tipo/index', ['tipos' => $data]);
	}

	/**
	 * chama a view show.php da seguinte forma /user/show passando um parâmetro 
	 * via URL /user/show/id e é retornado um array contendo (ou não) um determinado
	 * usuário. Além disso é verificado se foi passado ou não um id pela url, caso
	 * não seja informado, é chamado a view de página não encontrada.
	 * @param  int   $id   Identificado do usuário.
	 */
	public function show($id = null) {
		if(is_numeric($id)) {
			$Users = $this->model('Tipos');
			$data = $Users::findById($id);
			$this->view('tipo/show', ['tipo' => $data]);
		}
		else {
			$this->pageNotFound();
		}
	}

}
