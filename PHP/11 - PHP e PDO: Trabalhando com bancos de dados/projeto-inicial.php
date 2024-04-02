<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Weberty Silveira',
    new \DateTimeImmutable('1998-07-22')
);

echo $student->age();
