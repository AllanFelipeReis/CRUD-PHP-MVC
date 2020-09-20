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

	public static function create ($org) {
		$con = new Conn();
		$con->update("INSERT INTO organizacao (name, cnpj, ie, juridicalType, adress, obs, ended)
									VALUES ('".$org->getName()."', '".$org->getCnpj()."', '".$org->getIe()."', '".$org->getJuridicalType()."', '".$org->getAdress()."', '".$org->getObs()."', '".$org->getEnded()."')");
		$con->close();
	}

	public static function searchId ($id) {
		$con = new Conn();
		$cont = $con->search("SELECT * FROM organizacao WHERE Id = $id");
		$con->close();
		return $cont[0];
	}

	public static function update ($org) {
		$con = new Conn();
		$con->update("UPDATE organizacao
		SET name = '".$org->getName()."', cnpj = '".$org->getCnpj()."', ie = '".$org->getIe()."', juridicalType = '".$org->getJuridicalType()."', adress = '".$org->getAdress()."', obs = '".$org->getObs()."', ended = '".$org->getEnded()."'
			 						WHERE id = ".$org->getId()."");
		$con->close();
	}

	public static function delete ($id) {
		$con = new Conn();
		$con->update("DELETE FROM organizacao WHERE id = $id");
		$con->close();
	}
}
