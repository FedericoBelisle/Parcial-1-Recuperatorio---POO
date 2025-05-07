<?php

//Clase Cuota
class Cuota{

    //Atributos
    private $numero;
    private $monto_cuota;
    private $monto_interes;
    private $cancelada;

    //Constructor
    public function __construct($numero, $monto_cuota, $monto_interes){
        $this->numero = $numero;
        $this->monto_cuota = $monto_cuota;
        $this->monto_interes = $monto_interes;
        $this->cancelada = false;
    }

    //Setters
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function setMontoCuota($monto_cuota){
        $this->monto_cuota = $monto_cuota;
    }
    public function setMontoInteres($monto_interes){
        $this->monto_interes = $monto_interes;
    }
    public function setCancelada($cancelada){
        $this->cancelada = $cancelada;
    }

    //Getters
    public function getNumero(){
        return $this->numero;
    }
    public function getMontoCuota(){
        return $this->monto_cuota;
    }
    public function getMontoInteres(){
        return $this->monto_interes;
    }
    public function getCancelada(){
        return $this->cancelada;
    }

    //Dar Monto Final de la Cuota
    public function darMontoFinalCuota(){
        $total = 0;
        $monto = $this->getMontoCuota();
        $interes = $this->getMontoInteres();
        $total = $monto + $interes;
        return $total;
    }

    //tostring
    public function __tostring(){
        return "Numero de la Cuota: " .$this->getNumero() ."\n"
                ."Monto de la Cuota: " .$this->getMontoCuota() ."\n"
                ."Monto del Interes: " .$this->getMontoInteres() ."\n"
                ."¿Esta Cancelada?: " .$this->getCancelada()? "Si":"No" ."\n";
    }
}

?>