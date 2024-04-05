<?php

$path = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:" . $path);

echo "Conectado!";

$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');