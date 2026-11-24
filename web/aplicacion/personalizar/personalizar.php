<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

$barraUbi = [
    [
        "TEXTO"=>"Relacion 8",
        "LINK" =>"index.php"
    ]
];

  const COLORESTEXTO = [
        'negro' => ['nombre' => 'negro', 'rgb' => [0, 0, 0]],
        'blanco' => ['rgb' => [255, 255, 255]],
        'rojo' => ['rgb' => [255, 0, 0]],
        'azul' => ['rgb' => [0, 0, 255]],
        'verde' => ['rgb' => [0, 128, 0]]
    ];

  const COLORESFONDO = [
        'negro' => ['rgb' => [0, 0, 0]],
        'blanco' => ['rgb' => [255, 255, 255]],
        'rojo' => ['rgb' => [255, 0, 0]],
        'azul' => ['rgb' => [0, 0, 255]],
        'verde' => ['rgb' => [0, 128, 0]]
    ]; 

//dibuja la plantilla de vista
inicioCabecera("Index - Relacion 8");
cabecera();
finCabecera();

inicioCuerpo("Relacion 8",$barraUbi);
cuerpo(); 
finCuerpo();

// **********************************************************

// vista
function cabecera() {}

//vista
function cuerpo()
{

    ?>
         <label for="color">Colores: </label>
        <select name="color" id="color">
            <option value="">Seleccione color</option>
            <?php
            foreach (COLORESTEXTO as $clave => $info) {
                echo "<option value='" . $clave . "' " . $marcado . ">" . $info["nombre"] . "</option>" . PHP_EOL;
            }
            ?>
        </select>
    <?php
}