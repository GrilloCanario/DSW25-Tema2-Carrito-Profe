<?php

enum EstadoPedido: string {
    case PENDIENTE = 'pendiente';
    case PAGADO = 'pagado';
    case ENVIADO = 'enviado';
    case CANCELADO = 'cancelado';
}

class Pedido {
    public readonly string $id;
    public EstadoPedido $estado = EstadoPedido::PENDIENTE;
    private array $lineas = [];
    public Cliente $cliente;

    public function __construct(Cliente $cliente) {
        $this->id = "pedido-" .uniqid();
        $this->cliente = $cliente; 
    }

    public function agregarProducto(Producto $producto, int $cantidad): void {
        $this->lineas[] = new LineaPedido($producto, $cantidad);
        echo "<p>Se ha añadido una nueva línea con {$producto->nombre} x {$cantidad} </p>";
    }

    public function calcularTotal(): float {
        $total = 0.0;
        foreach($this->lineas as $lineaPedido) {
            $total += $lineaPedido->calcularSubTotal();
        }
        return $total; 
    }

    public function textoEstadoPedido() {
        return match ($this->estado) {
            EstadoPedido::PENDIENTE => "Su pedido está pendiente de pago.",
            EstadoPedido::PAGADO => "Su pedido está pagado y se está procesando.",
            EstadoPedido::ENVIADO => "Su pedido ha sido enviado.",
            EstadoPedido::CANCELADO => "Su pedido ha sido cancelado.",
        };
    }

}