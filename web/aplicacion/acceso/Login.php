<?php

include_once(dirname(__FILE__) . "/../../cabecera.php");

$barraUbi = [
    ["TEXTO" => "Inicio",
    "LINK"  => "../personalizar/index.php"],
    ["TEXTO" => "Inicio de sesion",
    "LINK" => "Login.php"]
];

$acceso = new Acceso();


// Dibuja la plantilla de vista
inicioCabecera("Index - Relacion 8");
cabecera();
finCabecera();

inicioCuerpo("Relacion 8", $barraUbi);
cuerpo(); 
finCuerpo();

// **********************************************************

// Vista
function cabecera() {}

// Vista
function cuerpo()
{
    
    ?>
        <form action="" method="post">
            <label for="usuario">Usuario: 
                <input type="text" name="usuario">
            </label>
            <br>
            <label for="contrasenia">Contraseña: 
                <input type="password" name="contrasenia">
            </label> <br>

            <input type="submit" value="Login">
        </form>
    <?php
}