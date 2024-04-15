<?php

namespace Alura\Pdo\Domain\Repository;

use Alura\Pdo\Domain\Model\Student;

interface StudentRepository
{
    public function allStudents();
    public function studentsWithPhones();
    public function studentsBirthAt(\DateTimeInterface $birtjDate);
    public function save(Student $student);
    public function remove($id);
}