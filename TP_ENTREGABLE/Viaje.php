<?php
/**
 * La clase Viaje debe hacer referencia al responsable 
 * de realizar el viaje.
 * Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los 
 * atributos nombre, apellido, numero de documento y teléfono.
 */

 class Viaje{
    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $objPasajeros;
    private $objResponsableV;

    public function __construct($cod, $des, $cantMax, Pasajeros $objPasajeros, ResponsableV $objResponsableV){
        $this->codigo = $cod;
        $this->destino = $des;
        $this->cantMaxPasajeros = $cantMax;
        $this->objPasajeros =  $objPasajeros;
        $this->objResponsableV =  $objResponsableV;
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
    public function getObjPasajeros(){
        return $this->objPasajeros;
    }
    public function getObjResponsableV(){
        return $this->objResponsableV;
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
    public function setObjPasajeros(Pasajeros $objPasajeros){
        $this->objPasajeros = $objPasajeros;
    }
    public function setObjResponsableV(ResponsableV $objResponsableV){
        $this->objResponsableV = $objResponsableV;
    }


    public function __toString(){
        $respuesta = "Código del viaje: ".$this->getCodigo()."\n";
        $respuesta .= "Destino: ".$this->getDestino()."\n";
        $respuesta .= "Cantidad máxima de pasajeros: ".$this->getCantMaxPasajeros()."\n";
        $respuesta .= "Datos de pasajeros: \n";
        $respuesta .= $this->getObjPasajeros();
        $respuesta .= "***************************************\n";
        $respuesta .= "Datos del responsable del viaje: \n";
        $respuesta .= $this->getObjResponsableV();

        return $respuesta;
    }
 }