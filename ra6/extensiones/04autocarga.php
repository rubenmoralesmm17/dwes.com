<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

// Utilizar las clases del espacio de nombres EN\
use EN\BD\conexion\ConectarBD;
use EN\BD\entidades\tiendaol\Categoria;
use EN\BD\Usuario;
use EN\Utils\Html;

echo "<h2>Autocarga de clases con Composer</h2>";


echo "<h2>Instanciamos un objeto de la clase ConectarBD</h2>";
$cbd = new ConectarBD("usuario", "abc123");


echo "<h3>Instanciamos un objeto tipo usuario</h3>";
$usuario = new Usuario("juanperez", "abc123");

echo "<h3>Instanciamos un objeto tipo categoria</h3>";
$categoria = new Categoria("ACIN", "Accesorios de informática");
?>