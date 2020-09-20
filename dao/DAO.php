<?php
require_once '../modelos/connection.php';
require_once '../modelos/org.php';

class OrgDAO {
	public static function serch () {
		$con = new Conn();
		$cont = $con->search('SELECT * FROM organizacao');
		$con->close();
		return $cont;
	}

	public static function create ($rol) {
		$con = new Conn();
		$con->update("INSERT INTO organizacao (name, cnpj, ie, juridicalType, adress, obs, ended)
									VALUES ('".$rol->getName()."', '".$rol->getCnpj()."', '".$rol->getIe()."', '".$rol->getJuridicalType()."', '".$rol->getAdress()."', '".$rol->getObs()."', '".$rol->getEnded()."')");
		$con->close();
	}

	public static function searchId ($id) {
		$con = new Conn();
		$cont = $con->search("SELECT * FROM organizacao WHERE Id = $id");
		$con->close();
		return $cont[0];
	}

	public static function update ($rol) {
		$con = new Conn();
		$con->update("UPDATE organizacao
		SET name = '".$rol->getName()."', cnpj = '".$rol->getCnpj()."', ie = '".$rol->getIe()."', juridicalType = '".$rol->getJuridicalType()."', adress = '".$rol->getAdress()."', obs = '".$rol->getObs()."', ended = '".$rol->getEnded()."'
			 						WHERE id = ".$rol->getId()."");
		$con->close();
	}

	public static function delete ($id) {
		$con = new Conn();
		$con->update("DELETE FROM organizacao WHERE id = $id");
		$con->close();
	}
}
