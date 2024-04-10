<?php
/**
 * RModificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los 
 * atributos nombre, apellido, numero de documento y teléfono.
 */

 class Pasajeros{
    private $nombre;
    private $apellido;
    private $nroDocumento;
    private $telefono;

    public function __construct($nom, $apell, $nroDoc, $num){
        $this->nombre = $nom;
        $this->apellido = $apell;
        $this->nroDocumento = $nroDoc;
        $this->telefono = $num;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getNroDocumento(){
        return $this->nroDocumento;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setNroDocumento($nro){
        $this->nroDocumento = $nro;
    }
    public function setTelefono($tel){
        $this->telefono = $tel;
    }

    public function __toString(){
    $res = "***************************************\n";
    $res .= "Nombre del Pasajero: ".$this->getNombre()."\n";
    $res .= "Apellido del Pasajero: ".$this->getApellido()."\n";
    $res .= "Numero de documento: ".$this->getNroDocumento()."\n";
    $res .= "Número de telefono: ".$this->getTelefono()."\n";
    return $res;
    }
 }