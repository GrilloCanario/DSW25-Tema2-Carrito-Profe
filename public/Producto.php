<?php

abstract class Producto {
    // public string $nombre;
    // public float $precio;

    // public function __construct(string $nombre, float $precio) {
    //     $this->nombre = $nombre;
    //     $this->precio = $precio;
    // }

    public function __construct(
        public readonly string $id,
        public string $nombre,
        private float $precio
    ) {
        $this->setPrecio($precio);
    }

    public function obtenerInfo(): string {
        return sprintf("Id: %s, Producto: %s, Precio: %.2f€", $this->id, $this->nombre, $this->precio);
    }

    public function setPrecio(float $nuevoPrecio): void {
        if ($nuevoPrecio < 0) {
            $this->precio = 0;
        } else {
            $this->precio = $nuevoPrecio;
        }
    }

    abstract public function obtenerDescripcionTipo(): string;

}