<?php

class ProductoFisico extends Producto implements Notificable {

    public function __construct(
        string $id,
        string $nombre,
        float $precio,
        public float $pesoKg
    ) {
        parent::__construct($id, $nombre, $precio);   
    }

    public function obtenerDescripcionTipo(): string {
        return sprintf("Físico con peso %.3fKg", $this->pesoKg);
    }

    public function enviarNotificacion(): string {
        return sprintf("Enviando SMS al cliente: Su pedido %s ha sido enviado",
                $this->nombre
            );
    }
}