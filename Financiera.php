<?php

//Incluimos Archivos
include_once "Prestamo.php";

//Clase Financiera
class Financiera{

    //Atributos
    private $denominacion;
    private $direccion;
    private $coleccion_prestamo;

    //Constructor
    public function __construct($denominacion, $direccion){
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
        $this->coleccion_prestamo = array();
    }

    //Setters
    public function setDenominacion($denominacion){
        $this->denominacion = $denominacion;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function setColeccionPrestamo($coleccion_prestamo){
        $this->coleccion_prestamo = $coleccion_prestamo;
    }

    //Getters
    public function getDenominacion(){
        return $this->denominacion;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getColeccionPrestamo(){
        return $this->coleccion_prestamo;
    }

    //Otorgar Prestamo
    public function otorgarPrestamo($objCliente, $cant_cuotas, $monto, $interés){
        $prestamo = new prestamo($monto, $cant_cuotas, $interés, $objCliente);
        $this->setColeccionPrestamo(array_push($prestamo));
    }

    //Tostring
    public function __tostring(){
        $colPrestamo = $this->getColeccionPrestamo();
        $resumenPrestamo = "";
        foreach ($colPrestamo as $prestamo){
            $resumenPrestamo .= $prestamo;
        }
        return "Denominacion: " .$this->getDenominacion() ."\n"
                ."Direccion: " .$this->getDireccion() ."\n"
                ."Coleccion de Prestamos: " .$resumenPrestamo ."\n";
    }
}

?>