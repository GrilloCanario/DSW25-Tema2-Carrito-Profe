<?php

class ProductoFisico extends Producto {

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

}