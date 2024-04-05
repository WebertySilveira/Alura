<?php

use Alura\Pdo\Domain\Model\Student as Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator as ConnectionCreatorAlias;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once __DIR__ . "/vendor/autoload.php";


$connection = ConnectionCreatorAlias::createConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

try {
    $aStudent = new Student(null, "teste", new DateTimeImmutable('1985-05-01'));
    $studentRepository->save($aStudent);
    $aStudent = new Student(null, "teste2", new DateTimeImmutable('1985-05-01'));
    $studentRepository->save($aStudent);
    throw new Exception();
}catch (Exception $e) {
    $connection->rollBack();
}

//$connection->commit();