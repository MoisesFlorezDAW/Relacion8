<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

// 1. Gestionar la cookie ANTES de imprimir nada de HTML
$visitas = isset($_COOKIE['numVisitas']) ? (int) $_COOKIE['numVisitas'] : 0;
$visitas++;

setcookie('numVisitas', (string) $visitas, [
    'expires'  => time() + (365 * 24 * 60 * 60),
    'path'     => '/',
    'secure'   => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on',
    'httponly' => true,
    'samesite' => 'Lax',
]);

$barraUbi = [
    [
        "TEXTO" => "Pag principal",
        "LINK"  => "index.php"
    ]
];

// Dibuja la plantilla de vista
inicioCabecera("Index - Relacion 8");
cabecera();
finCabecera();

inicioCuerpo("Relacion 8", $barraUbi);
cuerpo($visitas); 
finCuerpo();

// **********************************************************

// Vista
function cabecera() {}

// Vista
function cuerpo($visitas)
{
    echo "<p>Has entrado a esta página <strong>{$visitas}</strong> veces.</p>";
    ?>
    <br>
    <h3><strong>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi optio eveniet reiciendis maxime! Modi doloremque eligendi pariatur deserunt est porro? Praesentium voluptates rerum quaerat aperiam ipsum doloremque recusandae ad.</strong></h3>
    <?php
}
