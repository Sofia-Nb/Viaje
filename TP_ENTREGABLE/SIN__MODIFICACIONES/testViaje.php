<?php
include 'Viaje.php';

/**
 * Implementar un script testViaje.php que cree una 
 * instancia de la clase Viaje y presente un menú 
 * que permita cargar la información del viaje, 
 * modificar y ver sus datos.
 */
$objViaje = new Viaje(000000000000, "Sin Destino", 000);

 do{
    $opcion = cartel1();
    switch($opcion){

        case 1: 
            primerCaso($objViaje);
            break;

        case 2:
            $op = cartel2();
            $datosPas = $objViaje->getPasajeros();
            switch($op){

                case 1:
                    echo "Ingrese el nuevo código de viaje: \n";
                    $cod = trim(fgets(STDIN));
                    $objViaje->setCodigo($cod);
                    echo "**************************************\n";
                    echo "Código cambiado con éxito!!\n";
                    echo "Su nuevo código es: ".$cod."\n";
                    echo "**************************************\n";
                    break;

                case 2:
                    echo "Ingrese su nuevo destino: \n";
                    $dest = trim(fgets(STDIN));
                    $objViaje->setDestino($dest);
                    echo "**************************************\n";
                    echo "Destino cambiado con éxito!!\n";
                    echo "Su nuevo destino es: ".$dest."\n";
                    echo "**************************************\n";
                    break;

                case 3:
                    $pasajeros = $objViaje->getPasajeros();
                    $count = count($pasajeros);
                    $indice = 0;
                    do{
                    echo "Ingrese la cantidad máxima de pasajeros: \n";
                    $cant = trim(fgets(STDIN));
                    if ($cant < $count){
                        echo "ATENCIÓN!! La nueva cantidad es menor a los pasajeros registrados.\n";
                        echo "¿Desea cambiar la cantidad de nuevo? (si/no) \n";
                        $respuesta = trim(fgets(STDIN));
                        $respuesta = strtolower($respuesta);
                        if ($respuesta == "no"){
                        echo "NO SE CAMBIARON DATOS.\n";
                        }
                    }else{
                        $respuesta = "";
                        $objViaje->setCantMaxPasajeros($cant);
                    }
                    }while($respuesta == "si");
                    break;

                case 4:
                    $pasajeros = $objViaje->getPasajeros();
                    $count = count($pasajeros);
                    $count1 = count($pasajeros);
                    $cantMax = $objViaje->getCantMaxPasajeros();
                    echo "Ingrese la nueva cantidad de pasajeros: \n";
                    $nuvCant = trim(fgets(STDIN));
                    if ($nuvCant > $cantMax){
                        echo "ATENCIÓN!! La nueva cantidad de pasajeros sobrepasa la cantidad máxima permitida.\n";
                        echo "NO SE CAMBIARON DATOS.\n";
                        }
                    if($cantMax > $nuvCant){
                            $num = $nuvCant - $count;
                            echo "Debe registrar a los pasajeros faltantes: \n";
                            $i = 0;
                            while ($i < $num){
                                echo "Ingrese el nombre del Pasajero ".($count1+1).": \n";
                                $nombre = trim(fgets(STDIN));
                                echo "Ingrese el apellido del Pasajero ".($count1+1).": \n";
                                $apellido = trim(fgets(STDIN));
                                echo "Ingrese su número de documento ".($count1+1).": \n";
                                $numDoc = trim(fgets(STDIN));
                                $pasajeros[$count] = $objViaje->agregarPasajero($nombre, $apellido, $numDoc);
                                $objViaje->setPasajeros($pasajeros[$count]);
                                $count1++;
                                $i++;
                            }
                    }
                    break;
            }
            break;

        case 3:
            if ($objViaje->getCantMaxPasajeros() == 000){
            echo "\n";
            echo "NO HAY DATOS.\n";
            echo "\n";
            echo "********************************************\n";
            }else{
                echo $objViaje;
            }
            break;

        default:
        if (($opcion > 4) || ($opcion <= 0)){
        echo "Opción inválida, intentelo de nuevo.\n";
        }
        break;
    }
 }while($opcion != 4);
 if ($opcion == 4){
    echo "Hasta el próximo viaje!!\n";
 }



 function cartel1(){
    echo "\n";
    echo "MENÚ: \n";
    echo "1. Cargar información del viaje. \n";
    echo "2. Modificar Datos. \n"; 
    echo "3. Mostrar datos. \n";
    echo "4. Salir. \n";
    echo "********************************************\n";
    echo "Escriba su opción: \n";
    $opcion = trim(fgets(STDIN));
    return $opcion;
 }

 function cartel2(){
    echo "********************************************\n";
    echo "1. Código de viaje.\n";
    echo "2. Destino.\n";
    echo "3. Cantidad máxima de pasajeros.\n";
    echo "4. Pasajeros del viaje. \n";
    echo "********************************************\n";
    echo "\n";
    echo "¿Que datos desea modificar?: \n";
    $dato = trim(fgets(STDIN));
    return $dato;
 }

 function primerCaso(Viaje $objViaje){
            $datosPas = $objViaje->getPasajeros();

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
            echo "Ingrese los pasajeros del viaje: \n";
            $pasajeros = trim(fgets(STDIN));
            if ($pasajeros > $cantidad){
                echo "Error, excede la cantidad máxima de Pasajeros.\n";
                echo "Intentelo de nuevo. \n";
            }else{
            for ($i=0; $i < $pasajeros; $i++){
                echo "Ingrese el nombre del Pasajero ".($i+1).": \n";
                $nombre = trim(fgets(STDIN));
                echo "Ingrese el apellido del Pasajero ".($i+1).": \n";
                $apellido = trim(fgets(STDIN));
                echo "Ingrese su número de documento ".($i+1).": \n";
                $numDoc = trim(fgets(STDIN));
                $datosPas[$i] = $objViaje->agregarPasajero($nombre, $apellido, $numDoc);
                $objViaje->setPasajeros($datosPas[$i]);
                echo "\n";
            }
            echo "Datos cargados!!\n";
            }
            }while($pasajeros > $cantidad);
 }