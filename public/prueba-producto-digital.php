<?php

require_once 'Producto.php';
require_once 'ProductoDigital.php';
require_once 'ProductoFisico.php';



$apuntesOnline = new ProductoDigital('php8.1', 'Apuntes de PHP', 5.4, 'http://algo.es');

echo $apuntesOnline->obtenerDescripcionTipo();
echo "<br>";
$apuntesOnline->setPrecio(-33);
echo $apuntesOnline->obtenerInfo();

$aguacates = new ProductoFisico('cajaAgua', 'Caja de Aguacates', 235.99, 5);
echo "<hr>";
echo $aguacates->obtenerDescripcionTipo();