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
									VALUES ('$rol->name', '$rol->cnpj', '$rol->ie', '$rol->juridicalType', '$rol->adress', '$rol->obs', '$rol->ended')");
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
		SET name = '$rol->name', cnpj = '$rol->cnpj', ie = '$rol->ie', juridicalType = '$rol->juridicalType', adress = '$rol->adress', obs = '$rol->obs', ended = '$rol->ended'
			 						WHERE id = $rol->id");
		$con->close();
	}

	public static function delete ($id) {
		$con = new Conn();
		$con->update("DELETE FROM organizacao WHERE id = $id");
		$con->close();
	}
}
