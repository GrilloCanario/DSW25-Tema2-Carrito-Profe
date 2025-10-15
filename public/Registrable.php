<?php

trait Registrable {
    public function log( string $mensaje): void {
        echo "<h4>[LOG - " . date("Y-m-d H:i:s") . "]: " . $mensaje . "</h4>";
    }
}