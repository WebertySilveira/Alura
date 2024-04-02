<?php

$path = __DIR__ . "/config/database.sqlite";
$pdo = new PDO("sqlite:" . $path);

echo "Conectado!";