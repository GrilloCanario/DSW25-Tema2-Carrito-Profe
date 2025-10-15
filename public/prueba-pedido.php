<?php
require_once 'Pedido.php';

$miPedido = new Pedido('orden123');

echo "<pre>";
var_dump($miPedido);
echo "</pre>";

echo $miPedido->textoEstadoPedido();
echo "<hr>";
$miPedido->estado = EstadoPedido::PAGADO;
echo $miPedido->textoEstadoPedido();
echo "<hr>";
echo $miPedido->estado->value;