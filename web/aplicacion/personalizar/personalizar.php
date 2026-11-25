<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

$barraUbi = [
    [
        "TEXTO"=>"Relacion 8",
        "LINK" =>"index.php"
    ],
    [
        "TEXTO"=>"Personalizar",
        "LINK" =>"personalizar.php"
    ]
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
         <label for="color">Color de texto: </label>
        <select name="color" id="color">
            <option value="">Seleccione color</option>
            <?php
            foreach (COLORESTEXTO as $clave => $info) {
                echo "<option value='" . $clave . "' " . ">" . $info["nombre"] . "</option>" . PHP_EOL;
            }
            ?>
        </select>

        <label for="color">Color de fondo: </label>
        <select name="color" id="color">
            <option value="">Seleccione color</option>
            <?php
            foreach (COLORESFONDO as $clave => $info) {
                echo "<option value='" . $clave . "' " . ">" . $info["nombre"] . "</option>" . PHP_EOL;
            }
            ?>
        </select>
    <?php
}