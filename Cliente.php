<?php

//Clase Financiera
class Financiera{

    //Atributos
    private $nombre;
    private $apellido;
    private $dni;
    private $direccion;
    private $mail;
    private $telefono;
    private $neto;

    //Constructor
    public function __construct($nombre, $apellido, $dni, $direccion, $mail, $telefono, $neto){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->direccion = $direccion;
        $this->mail = $mail;
        $this->telefono = $telefono;
        $this->neto = $neto;
    }

    //Setters
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setDNI($dni){
        $this->dni = $dni;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function setMail($mail){
        $this->mail = $mail;
    }
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    public function setNeto($neto){
        $this->neto = $neto;
    }

    //Getters
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getDNI(){
        return $this->dni;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getMail(){
        return $this->mail;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getNeto(){
        return $this->neto;
    }

    //Tostring
    public function __tostring(){
        return "Nombre: " .$this->getNombre() ."\n"
                ."Apellido: " .$this->getApellido() ."\n"
                ."DNI: " .$this->getDNI() ."\n"
                ."Direccion" .$this->getDireccion() ."\n"
                ."Mail: " .$this->getMail() ."\n"
                ."Telefono: " .$this->getTelefono() ."\n"
                ."Neto: " .$this->getNeto() ."\n";
    }
}

?>