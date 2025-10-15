<?php

enum EstadoPedido: string {
    case PENDIENTE = 'pendiente';
    case PAGADO = 'pagado';
    case ENVIADO = 'enviado';
    case CANCELADO = 'cancelado';
}

class Pedido {
    public function __construct(
        public readonly string $id,
        public EstadoPedido $estado = EstadoPedido::PENDIENTE
    ) {

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