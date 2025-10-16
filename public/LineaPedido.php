<?php

class LineaPedido {
    public function __construct(
        public readonly Producto $producto,
        public readonly int $cantidad
    ) {}

    public function calcularSubTotal(): float {
        return $this->cantidad * $this->producto->getPrecio();
    }
}