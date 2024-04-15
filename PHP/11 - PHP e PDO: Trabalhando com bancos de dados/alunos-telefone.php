<?php

require_once __DIR__ . "/vendor/autoload.php";

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

$connection = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($connection);
var_dump($repository->studentsWithPhones());
