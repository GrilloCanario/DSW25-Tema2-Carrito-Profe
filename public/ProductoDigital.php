<?php

require_once 'Producto.php';

class ProductoDigital extends Producto implements Notificable {

    public function __construct(
        string $id,
        string $nombre,
        float $precio,
        public string $urlDescarga
    ) {
       parent::__construct($id, $nombre, $precio); 
    }

    public function obtenerDescripcionTipo(): string {
        return "Digital";
    }

    public function enviarNotificacion(): string {
        return sprintf("Puedes descargar el %s en la url: %s",
                $this->nombre,
                $this->urlDescarga
            );
    }
}