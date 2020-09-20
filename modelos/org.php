<?php

class Org{

    public $id;
    public $name;
    public $cnpj;
    public $ie;
    public $juridicalType;
    public $adress;
    public $obs;
    public $ended;

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
