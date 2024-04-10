<?php
include 'Viaje.php';
include_once 'Pasajeros.php';
include_once 'ResponsableV.php';

/**
 * Implementar un script testViaje.php que cree una 
 * instancia de la clase Viaje y presente un menú 
 * que permita cargar la información del viaje, 
 * modificar y ver sus datos.
 */
$objResponsable = new ResponsableV(000, 00000000000, "Nombre", "Apellido");
$objPasajero = new Pasajeros("Nombre", "Apellido", 00000000, 0000000000);
$objViaje = new Viaje(00000000, "Destino", 000, $objPasajero, $objResponsable);

echo pasajeros($objViaje, $objPasajero);
echo responsable($objResponsable);
echo $objViaje;
echo "DATOS CARGADOS!!\n";

 function pasajeros(Viaje $objViaje, Pasajeros $objPasajero){

            echo "Ingrese el código de viaje: \n";
            $codigo = trim(fgets(STDIN));
            $objViaje->setCodigo($codigo);

            echo "Ingrese su destino: \n";
            $destino = trim(fgets(STDIN));
            $objViaje->setDestino($destino);

            echo "Ingrese la cantidad máxima de pasajeros: \n";
            $cantidad = trim(fgets(STDIN));
            $objViaje->setCantMaxPasajeros($cantidad);

            do{
                echo "*******************************************************\n";
                echo "Ingrese los pasajeros del viaje: \n";
            $pasajeros = trim(fgets(STDIN));
            if ($pasajeros > $cantidad){
                echo "Error, excede la cantidad máxima de Pasajeros.\n";
                echo "Intentelo de nuevo. \n";
            }else{
                $i = 0; 
                while($i < $pasajeros){
                echo "Ingrese el nombre del Pasajero ".($i+1).": \n";
                $nombre = trim(fgets(STDIN));
                echo "Ingrese el apellido del Pasajero ".($i+1).": \n";
                $apellido = trim(fgets(STDIN));
                echo "Ingrese el número de documento del Pasajero ".($i+1).": \n";
                $numDoc = trim(fgets(STDIN));
                echo "Ingrese el teléfono del Pasajero: ".($i+1)."\n";
                $tel = trim(fgets(STDIN));
                echo "*******************************************************\n";
                $objPasajero->setNombre($nombre);
                $objPasajero->setApellido($apellido);
                $objPasajero->setNroDocumento($numDoc);
                $objPasajero->setTelefono($tel);
                echo "\n";
                $i++;
            }
            }
            }while($pasajeros > $cantidad);
 }

 function responsable (ResponsableV $objResponsable){
    echo "Ingrese el número de empleado: \n";
    $num = trim(fgets(STDIN));
    echo "Ingrese número de licencia: \n";
    $lic = trim(fgets(STDIN));
    echo "Nombre del responsable: \n";
    $nom = trim(fgets(STDIN));
    echo "Apellido del responsable: \n";
    $apell = trim(fgets(STDIN));
    $objResponsable->setNumEmpleado($num);
    $objResponsable->setNumLicencia($lic);
    $objResponsable->setNombre($nom);
    $objResponsable->setApellido($apell);
 }