<?php

class Carrito {
    public function __construct(
        private array $productos = []
    ) {
    }

    public function agregarProducto(Producto $producto) {
        $this->productos[] = $producto;
        printf("<p>Se añade el producto: %s</p>", $producto->obtenerInfo() );
    }

    public function mostrarCarrito() {
        echo "<p>----Carrito de compra ------</p>";
        echo "<ul>";
        foreach($this->productos as $producto) {
            printf("<li>%s</li>", $producto->obtenerInfo());
        }
        echo "</ul>";
    }
}