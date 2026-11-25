<?php 
define("RUTABASE", dirname(__FILE__));
//define("MODO_TRABAJO","produccion"); //en "produccion o en desarrollo
define("MODO_TRABAJO","desarrollo"); //en "produccion o en desarrollo

const COLORESTEXTO = [
        'negro' => ['nombre' => 'negro', 'rgb' => [0, 0, 0]],
        'blanco' => ['nombre' => 'blanco', 'rgb' => [255, 255, 255]],
        'rojo' => ['nombre' => 'rojo', 'rgb' => [255, 0, 0]],
        'azul' => ['nombre' => 'azul', 'rgb' => [0, 0, 255]],
        'verde' => ['nombre' => 'verde', 'rgb' => [0, 128, 0]]
    ];

  const COLORESFONDO = [
        'negro' => ['nombre' => 'negro', 'rgb' => [0, 0, 0]],
        'blanco' => ['nombre' => 'blanco', 'rgb' => [255, 255, 255]],
        'rojo' => ['nombre' => 'rojo', 'rgb' => [255, 0, 0]],
        'azul' => ['nombre' => 'azul', 'rgb' => [0, 0, 255]],
        'verde' => ['nombre' => 'verde', 'rgb' => [0, 128, 0]]
    ]; 

if (MODO_TRABAJO=="produccion")
    error_reporting(0);
    else 
        error_reporting(E_ALL);  

spl_autoload_register(function ($clase){
    $ruta=RUTABASE."/scripts/clases/";
    $fichero=$ruta."$clase.php";
    
    if (file_exists($fichero))
        {
            require_once($fichero);
        }
      else
        {
            throw new Exception("La clase $clase no se ha encontrado.");
        }
});

include(RUTABASE."/aplicacion/plantilla/plantilla.php");

//creo todos los objetos que necesita mi aplicación
