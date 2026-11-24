<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

$barraUbi = [
    [
        "TEXTO"=>"Relacion 8",
        "LINK" =>"index.php"
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
    <h3><strong>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi optio eveniet reiciendis maxime! Modi doloremque eligendi pariatur deserunt est porro? Praesentium voluptates rerum quaerat aperiam ipsum doloremque recusandae ad.</strong></h3>

    <?php
}