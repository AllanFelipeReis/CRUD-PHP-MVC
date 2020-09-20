<?php

class Org{

    private $id;
    private $name;
    private $cnpj;
    private $ie;
    private $juridicalType;
    private $adress;
    private $obs;
    private $ended;

    public function construct(){
			$this->id = 0;
	    $this->name = '';
	    $this->cnpj = '';
	    $this->ie = '';
	    $this->juridicalType = '';
	    $this->adress = '';
	    $this->obs = '';
	    $this->ended = '';
    }

    public function getId(){
      return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getCnpj(){
        return $this->cnpj;
    }
    public function getIe(){
        return $this->ie;
    }
    public function getJuridicalType(){
        return $this->juridicalType;
    }
    public function getAdress(){
        return $this->adress;
    }
    public function getObs(){
        return $this->obs;
    }
    public function getEnded(){
        return $this->ended;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }
    public function setIe($ie){
        $this->ie = $ie;
    }
    public function setJuridicalType($juridicalType){
        $this->juridicalType = $juridicalType;
    }
    public function setAdress($adress){
        $this->adress = $adress;
    }
    public function setObs($obs){
        $this->obs = $obs;
    }
    public function setEnded($ended){
        $this->ended = $ended;
    }
}
?>
