<?php

require_once 'Registrable.php';
require_once 'Producto.php';
require_once 'Notificable.php';
require_once 'ProductoDigital.php';
require_once 'ProductoFisico.php';
require_once 'Carrito.php';

$apuntesOnline = new ProductoDigital('php8.1', 'Apuntes de PHP', 5.4, 'http://algo.es');
$aguacates = new ProductoFisico('cajaAgua', 'Caja de Aguacates', 235.99, 5);


$miCarrito = new Carrito();
$miCarrito->mostrarCarrito();
echo "<hr>";

$miCarrito->agregarProducto($aguacates);
$miCarrito->mostrarCarrito();

echo "<hr>";
$miCarrito->agregarProducto($apuntesOnline);
$miCarrito->mostrarCarrito();

echo "<hr>";
$miCarrito->agregarProducto(
    new ProductoFisico('tornillos', 'tornillos de estrella', 0.15, 10)
);
$miCarrito->mostrarCarrito();

echo "<hr>";

echo "<hr>";

echo "<hr>";
