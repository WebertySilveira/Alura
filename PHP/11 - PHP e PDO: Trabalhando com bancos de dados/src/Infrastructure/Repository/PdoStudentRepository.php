<?php

namespace Alura\Pdo\Infrastructure\Repository;

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Domain\Repository\StudentRepository;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use DateTimeImmutable;
use PDO;

class PdoStudentRepository implements StudentRepository
{
    private \PDO $connection;

    public function __construct($connection = null)
    {
        if ($connection) {
            $this->connection = $connection;
        }
        $this->connection = ConnectionCreator::createConnection();
    }

    public function allStudents()
    {
        $statement = $this->connection->query("SELECT * FROM students;");
        $studentDataList = $statement->fetchAll(PDO::FETCH_OBJ);

        foreach ($studentDataList as $studentData) {
            $studentList = new Student(
                $studentData->id,
                $studentData->name,
                new DateTimeImmutable($studentData->birth_date)
            );
        }

        return $studentList;
    }

    public function studentsBirthAt(\DateTimeInterface $birtjDate): array
    {
        // TODO: Implement studentsBirthAt() method.
    }

    public function save(Student $student): bool
    {
        $sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
        $statement = $this->connection->prepare($sqlInsert);
        $statement->bindValue(':name', $student->name());
        $statement->bindValue(':birth_date', $student->birthDate()->format("Y-m-d"));

        return $statement->execute();
    }

    public function remove($id)
    {
        $query = "DELETE FROM students WHERE id = ?";
        $statement = $this->connection->prepare($query);
        $statement->bindValue(1, $id, PDO::PARAM_INT);
        return $statement->execute();
    }
}