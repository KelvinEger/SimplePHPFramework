<?php

namespace Application\models;

use Application\core\Database;
use PDO;

class Tipo {
	/** Poderiamos ter atributos aqui */

	/**
	 * Este método busca todos os usuários armazenados na base de dados
	 *
	 * @return   array
	 */
	public static function findAll() {
		$conn = new Database();
		$result = $conn->executeQuery('SELECT * FROM tipo');
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	/**
	 * Este método busca um usuário armazenados na base de dados com um
	 * determinado ID
	 * @param    int     $id   Identificador único do usuário
	 *
	 * @return   array
	 */
	public static function findById(int $id) {
		$conn = new Database();
		$result = $conn->executeQuery('SELECT * FROM tipo WHERE tipcodigo = :ID LIMIT 1', array(
			':tipcodigo' => $id
		));

		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

}
