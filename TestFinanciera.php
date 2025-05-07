<?php

//Incluimos archivos
include_once "Cliente.php";
include_once "Cuota.php";
include_once "Financiera.php";
include_once "Prestamo.php";

//Creacion de Financiera
$Financiera = new Financiera("ElectroCash", "Av. Arg 1234");

//Creamos Personas
$persona1 = new Cliente("Pepe", "Flores", 16598324, "Bs As 12", "dir@mar.com", 299444567, 40000);