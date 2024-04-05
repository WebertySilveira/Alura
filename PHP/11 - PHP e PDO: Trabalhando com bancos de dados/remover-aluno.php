<?php

use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once __DIR__ . "/vendor/autoload.php";

$result = (new PdoStudentRepository())->remove(1);
