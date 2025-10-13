<?php
require_once 'Producto.php';

$libro = new Producto();

echo "<pre>";
var_dump($libro);
echo "</pre>";
$libro2 = $libro;  // Se referencia al mismo objeto.

$libro->nombre = "Apuntes de PHP";
$libro2->precio = 0.99;

echo "<pre>";
var_dump($libro2);
echo "</pre>";
echo $libro->obtenerInfo();

echo "<hr>";

$raton = new Producto();
$raton->nombre = "Ratón USB con rueda";
$raton->precio = 5.9;

echo "<pre>";
var_dump($raton);
echo "</pre>";

echo $raton->obtenerInfo();