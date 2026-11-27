<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

$barraUbi = [
    [
        "TEXTO" => "Relacion 8",
        "LINK"  => "index.php"
    ],
    [
        "TEXTO" => "Personalizar",
        "LINK"  => "personalizar.php"
    ]
];

// 1. Cargamos el valor de la cookie si existe, o usamos uno por defecto
$colorFondo = $_COOKIE['colorFondo'] ?? "white";
$colorTexto = $_COOKIE['colorTexto'] ?? "black";

if (isset($_POST["cambia"])) {
    // 2. Comprobamos que el color enviado exista en la constante
    if (isset($_POST['colorTexto']) && isset(COLORESTEXTO[$_POST['colorTexto']])) {
        $colorTexto = $_POST['colorTexto'];
        setcookie('colorTexto', $colorTexto, time() + 3600 * 24 * 30, '/');
    }
    if (isset($_POST['colorFondo']) && isset(COLORESFONDO[$_POST['colorFondo']])) {
        $colorFondo = $_POST['colorFondo'];
        setcookie('colorFondo', $colorFondo, time() + 3600 * 24 * 30, '/');
    }
}

// Dibuja la plantilla de vista
inicioCabecera("Personalizar - Relacion 8");
cabecera($colorTexto, $colorFondo);
finCabecera();

inicioCuerpo("Relacion 8", $barraUbi);
cuerpo($colorTexto, $colorFondo); 
finCuerpo();

// **********************************************************

// Vista cabecera
function cabecera(string $colorTexto, string $colorFondo) {
    ?>
    <style>
        #documento {
            background-color: <?= $colorFondo ?>;
            color: <?= $colorTexto ?>;
        }
    </style>
    <?php
}

// Vista cuerpo
function cuerpo(string $colorTexto, string $colorFondo) {
    ?>
    <form action="" method="post">
        <label for="colorTexto">Color de texto: </label>
        <select name="colorTexto" id="colorTexto">
            <?php
            foreach (COLORESTEXTO as $clave => $info) {
                $selected = ($clave === $colorTexto) ? "selected" : "";
                echo "<option value='$clave' $selected>" . $info["nombre"] . "</option>" . PHP_EOL;
            }
            ?>
        </select>

        <label for="colorFondo">Color de fondo: </label>
        <select name="colorFondo" id="colorFondo">
            <?php
            foreach (COLORESFONDO as $clave => $info) {
                $selected = ($clave === $colorFondo) ? "selected" : "";
                echo "<option value='$clave' $selected>" . $info["nombre"] . "</option>" . PHP_EOL;
            }
            ?>
        </select>
        
        <input type="submit" value="Aplicar cambios" name="cambia">    
    </form>
    <?php
}
