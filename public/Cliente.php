<?php

class Cliente {
    public function __construct(
        public readonly string $id,
        public string $nombre
    ) {}
}