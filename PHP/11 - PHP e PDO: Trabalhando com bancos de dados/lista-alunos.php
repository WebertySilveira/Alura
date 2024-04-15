<?php

require_once __DIR__ . "/vendor/autoload.php";

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

$pdo = ConnectionCreator::createConnection();
$result = (new PdoStudentRepository)->allStudents();
var_dump($result);
