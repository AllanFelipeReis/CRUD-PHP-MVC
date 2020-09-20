<?php
require_once '../modelos/org.php';
require_once '../dao/DAO.php';

switch ($_GET['method']) {
	case 'create':
		$org = new Org();
		$org->setName($_POST['name']);
		$org->setCnpj($_POST['cnpj']);
		$org->setIe($_POST['ie']);
		$org->setJuridicalType($_POST['juridicalType']);
		$org->setAdress($_POST['adress']);
		$org->setObs($_POST['obs']);
		$org->setEnded($_POST['ended']);

		OrgDAO::create($org);
		break;
	case 'edit':
		$org = new Org();
		$org->setId($_POST['id']);
		$org->setName($_POST['name']);
		$org->setCnpj($_POST['cnpj']);
		$org->setIe($_POST['ie']);
		$org->setJuridicalType($_POST['juridicalType']);
		$org->setAdress($_POST['adress']);
		$org->setObs($_POST['obs']);
		$org->setEnded($_POST['ended']);

		OrgDAO::update($org);
		break;
	case 'elim':
		OrgDAO::delete($_GET['id']);
		break;
}

header('Location: ../views/');
