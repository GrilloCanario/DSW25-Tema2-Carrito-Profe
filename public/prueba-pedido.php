<?php
require_once "cliente.php";
require_once 'Registrable.php';
require_once 'Notificable.php';
require_once 'Producto.php';
require_once 'ProductoFisico.php';
require_once 'LineaPedido.php';
require_once 'Pedido.php';

$yo = new Cliente('12345678A', "Andrés");
$miPedido = new Pedido($yo);

$miPedido->agregarProducto(
    new ProductoFisico('r123', 'ratón con rueda', 5, 0.2),
    11
);
$miPedido->agregarProducto(
    new ProductoFisico('t234', 'teclado con teclas', 10, 0.4),
    6
);

echo "<pre>";
var_dump($miPedido);
echo "</pre>";

echo $miPedido->textoEstadoPedido();
echo "<hr>";
$miPedido->estado = EstadoPedido::PAGADO;
echo $miPedido->textoEstadoPedido();
echo "<hr>";
echo $miPedido->estado->value;
echo "<hr>";
echo "Total: " . $miPedido->calcularTotal();
echo "<hr>";
echo "<p>Pedido realizado por {$miPedido->cliente->nombre}</p>";