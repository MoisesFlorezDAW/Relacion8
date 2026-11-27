<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
include_once(dirname(__FILE__). "/RegistroTexto.php");

$barraUbi = [
    ["TEXTO" => "Relacion 8",
    "LINK"  => "../personalizar/index.php"],
    ["TEXTO" => "Crear textos",
    "LINK" => "verTextos.php"]
];

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

$textos = $_SESSION['textos'] ?? [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty(trim($_POST['texto'] ?? ''))) {
    $textoRecibido = trim($_POST['texto']);    
    
    $nuevoRegistro = new RegistroTexto($textoRecibido);
    $textos[] = $nuevoRegistro;
    
    $_SESSION['textos'] = $textos;
}

if (isset($_POST["limpiar"])) {
    $textos = [];
}


// Dibuja la plantilla de vista
inicioCabecera("Index - Relacion 8");
cabecera();
finCabecera();

inicioCuerpo("Relacion 8", $barraUbi);
cuerpo($textos); 
finCuerpo();

// **********************************************************

// Vista
function cabecera() {}

// Vista
function cuerpo(array $textos)
{
    ?>
    <br>
        <form action="" method="post">
            <input type="text" name="texto" required">
            <br>
            <input type="submit" value="Registar texto">
            <input type="submit" value="Limpiar todo" name="limpiar">

            <br>
             <textarea id="textos" name="textos" cols="45" rows="6" readonly><?php
            foreach ($textos as $registro) {
                echo htmlspecialchars((string)$registro) . "\n";
            }
        ?></textarea>
        </form>
    <?php
}