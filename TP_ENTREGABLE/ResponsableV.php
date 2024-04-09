<?php
/**
 * También se desea guardar la información de la persona 
 * responsable de realizar el viaje, para ello cree una 
 * clase ResponsableV que registre el número de empleado, 
 * número de licencia, nombre y apellido. 
 * La clase Viaje debe hacer referencia al responsable 
 * de realizar el viaje.
 */

 class ResponsableV{
    private $numEmpleado;
    private $numLicencia;
    private $nombre;
    private $apellido;

    public function __construct($empledo, $licencia, $nom, $apell){
        $this->numEmpleado = $empledo;
        $this->numLicencia = $licencia;
        $this->nombre = $nom;
        $this->apellido = $apell;
    }

    public function geNumEmpleado(){
        return $this->numEmpleado;
    }
    public function getNumLicencia(){
        return $this->numLicencia;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setNumEmpleado($nroEmpleado){
        $this->numEmpleado = $nroEmpleado;
    }
    public function setNumLicencia($nroLicencia){
        $this->numLicencia = $nroLicencia;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
 }