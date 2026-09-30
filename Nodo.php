<?php
declare(strict_types=1);
class Nodo{
    public function __construct(
        public readonly int $id,
        public readonly string $nombre,
        public readonly float $precio,
        public readonly int $stock,
        public ?Nodo $siguiente = null,
        public ?Nodo $anterior = null
    ) {}
}
?>