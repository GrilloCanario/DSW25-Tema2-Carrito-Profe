<?php

require_once 'Producto.php';

class ProductoDigital extends Producto {

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

}