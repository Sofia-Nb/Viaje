<?php
/**
 * La empresa de Transporte de Pasajeros “Viaje Feliz” 
 * quiere registrar la información referente a sus viajes. 
 * De cada viaje se precisa almacenar el código del mismo, 
 * destino, cantidad máxima de pasajeros y 
 * los pasajeros del viaje.
 */

 class Viaje{
    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $Pasajeros = [];

    public function __construct($cod, $des, $cantMax){
        $this->codigo = $cod;
        $this->destino = $des;
        $this->cantMaxPasajeros = $cantMax;
        $this->Pasajeros = array();
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function getDestino(){
        return $this->destino;
    }
    public function getCantMaxPasajeros(){
        return $this->cantMaxPasajeros;
    }
    public function getPasajeros(){
        return $this->Pasajeros;
    }
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function setDestino($destino){
        $this->destino = $destino;
    }
    public function setCantMaxPasajeros($cantidad){
        $this->cantMaxPasajeros = $cantidad;
    }
    public function setPasajeros($pasajeros){
        $this->Pasajeros[] = $pasajeros;
    }

    public function agregarPasajero($nom, $apell, $numDoc){
        $pasajero = array (
            "Nombre" => $nom,
            "Apellido" => $apell,
            "NumeroDocumento" => $numDoc
        );
        return $pasajero; 

    }
    public function __toString(){
        $pasajero = $this->getPasajeros();
        $respuesta = "Código del viaje: ".$this->getCodigo()."\n";
        $respuesta .= "Destino: ".$this->getDestino()."\n";
        $respuesta .= "Cantidad máxima de pasajeros: ".$this->getCantMaxPasajeros()."\n";
        $respuesta .= "Pasajeros del viaje: ".count($pasajero)."\n";
        $respuesta .= "Datos de pasajeros: \n";
        $respuesta .= "***************************************\n";
        for ($i=0; $i < count($pasajero); $i++){
            $respuesta .= "Nombre: ".$pasajero[$i]["Nombre"]."\n";
            $respuesta .= "Apellido: ".$pasajero[$i]["Apellido"]."\n";
            $respuesta .= "Numero de documento: ".$pasajero[$i]["NumeroDocumento"]."\n";
            $respuesta .= "***************************************\n";
        }
    
        return $respuesta;
    }
 }