<?php
require_once 'Producto.php';

$libro = new Producto("php123", "Apuntes de PHP", 1.75);

echo "<pre>";
var_dump($libro);
echo "</pre>";
$libro2 = $libro;  // Se referencia al mismo objeto.

//$libro->nombre = "Apuntes de PHP";
//$libro2->precio = 0.99;

echo "<pre>";
var_dump($libro2);
echo "</pre>";
echo $libro->obtenerInfo();

echo "<hr>";

$raton = new Producto("raton666", "Raton USB con rueda", 7);
//$raton->nombre = "Ratón USB con rueda";
//$raton->precio = 5.9;

echo "<pre>";
var_dump($raton);
echo "</pre>";

//$raton->id = "raton222";
echo $raton->obtenerInfo();

