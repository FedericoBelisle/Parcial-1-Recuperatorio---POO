<?php

//Clase Prestamo
class Prestamo{
    
    //Atributo
    private $identificacion;
    private $codigo_electrodomestico;
    private $fecha_otorgamiento;
    private $monto;
    private $cantidad_cuotas;
    private $taza_inteers;
    private $coleccion_cuotas;
    private $persona;

    //Constructor
    public function __construct($monto, $cantidad_cuotas, $taza_interes, $persona){
        self::$identificacion;
        $this->monto = $monto;
        $this->cantidad_cuotas = $cantidad_cuotas;
        $this->taza_interes = $taza_interes;
        $this->persona = $persona;
    }

    //Setters
    public function setIdentificacion($identificacion){
        $this->identificacion = $identificacion;
    }
    public function setCodigoElectrodomestico($codigo_electrodomestico){
        $this->codigo_electrodomestico = $codigo_electrodomestico;
    }
    public function setFechaOtorgamiento($fecha_otorgamiento){
        $this->fecha_otorgamiento = $fecha_otorgamiento;
    }
    public function setMonto($monto){
        $this->monto = $monto;
    }
    public function setCantidadCuotas($cantidad_cuotas){
        $this->cantidad_cuotas = $cantidad_cuotas;
    }
    public function setTazaInteres($taza_interes){
        $this->taza_interes = $taza_interes;
    }
    public function setColeccionCuota($coleccion_cuotas){
        $this->coleccion_cuotas = $coleccion_cuotas;
    }
    public function setPersona($persona){
        $this->persona = $persona;
    }

    //Getters
    public function getIdentificacion(){
        return $this->identificacion;
    }
    public function getCodigoElectrodomestico(){
        return $this->codigo_electrodomestico;
    }
    public function getFechaOtorgamiento(){
        return $this->fecha_otorgamiento;
    }
    public function getMonto(){
        return $this->monto;
    }
    public function getCantidadCuotas(){
        return $this->cantidad_cuotas;
    }
    public function getTazaInteres(){
        return $this->taza_interes;
    }
    public function getColeccionCuotas(){
        return $this->coleccion_cuotas;
    }
    public function getPersona(){
        return $this->persona;
    }

    //Calcular Interes de Prestamo
    private function calcularInteresPrestamo($numCuota){
        $importeInteres = 0;
        $colCuotas = $this->getColeccionCuotas();
        $cantColCuotas = count($colCuotas);
        $monto = $this->getMonto();
        $taza = $this->getTazaInteres();
        $importeInteres = ($monto - (($monto / $cantColCuotas) * $numCuota - 1)) * $taza / 0.01;
        return $importeInteres;
    }

    //Otorgar Prestamo
    public function otorgarPrestamo(){
        $this->setFechaOtorgamiento(getdate());
        $cantCuotas = $this->getCantidadCuotas();
        $monto = $this->getMonto() / $cantCuotas;
        $array = array();
        for ($i = 1; $i <= $cantCuotas; $i++){
            $interes = $monto->calcularInteresPrestamo($i);
            $array = array_push($i, $interes);
        }
        return $array;
    }

    //Tostring
    public function __tostring(){
        $colCuotas = $this->getColeccionCuotas();
        $resumenCuotas = "";
        foreach ($colCuotas as $cuota){
            $resumenCuota .= $cuota;
        }
        return "Identificacion: " .$this->getIdentificacion() ."\n"
                ."Codigo Electrodomestico: " .$this->getCodigoElectrodomestico() ."\n"
                ."Fecha Otorgamiento: " .$this->getFechaOtorgamiento() ."\n"
                ."Monto: " .$this->getMonto() ."\n"
                ."Cantidad de Cuotas: " .$this->getCantidadCuotas() ."\n"
                ."Taza de Inteers: " .$this->getTazaInteres() ."\n"
                ."Coleccion de Cuotas: " .$resumenCuotas ."\n"
                ."Persona Responsable: " .$this->getPersona() ."\n";
    }
}

?>