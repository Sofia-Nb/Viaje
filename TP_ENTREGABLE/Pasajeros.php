<?php
/**
 * Realice la implementación de la clase Viaje e 
 * implemente los métodos necesarios para modificar los 
 * atributos de dicha clase 
 * (incluso los datos de los pasajeros). 
 * Utilice clases y arreglos para almacenar la 
 * información correspondiente a los pasajeros. 
 * Cada pasajero guarda  su “nombre”, “apellido” y 
 * “numero de documento”.
 */

 class Pasajeros{
    private $nombre;
    private $apellido;
    private $nroDocumento;

    public function __construct($nom, $apell, $nroDoc){
        $this->nombre = $nom;
        $this->apellido = $apell;
        $this->nroDocumento = $nroDoc;
    }

    public function geNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getNroDocumento(){
        return $this->nroDocumento;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setDestino($apellido){
        $this->apellido = $apellido;
    }
    public function setNroDocumento($nro){
        $this->nroDocumento = $nro;
    }
 }