<?php

require_once __DIR__ . "/vendor/autoload.php";

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

$student = new Student(
    null,
    "Weberty Silveira",
    new DateTimeImmutable('1998-07-22')
);

$result = (new PdoStudentRepository())->save($student);
var_dump($result);