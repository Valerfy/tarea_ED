<?php
declare(strict_types=1);

require_once __DIR__ . '/db.php';
require_once __DIR__ . '/Nodo.php';
require_once __DIR__ . '/ListaDoblementeEnlazada.php';

$db = new Database();
$pdo = $db->getPdo();

$stmt = $pdo->query("SELECT * FROM producto ORDER BY precio DESC");
$productos = $stmt->fetchAll();

$lista = new ListaDoblementeEnlazada();

foreach ($productos as $p) {
    $nodo = new Nodo(
        (int)$p['id_producto'],
        $p['nombre'],
        (float)$p['precio'],
        (int)$p['stock']
    );

    $lista->agregarAlFinal($nodo);
}

echo "Se insertaron los registros: " . implode(',', $lista->obtenerId());
?>