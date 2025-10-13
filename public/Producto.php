<?php

class Producto {
    public string $nombre;
    public float $precio;

    public function obtenerInfo(): string {
        return sprintf("Producto: %s, Precio: %.2f€", $this->nombre, $this->precio);
    }
}