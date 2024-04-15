<?php

namespace Alura\Pdo\Infrastructure\Repository;

use Alura\Pdo\Domain\Model\Phone;
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
        $sqlInsert = "INSERT INTO studenta (name, birth_date) VALUES (:name, :birth_date);";
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

    private function fillPhones(Student $student)
    {
        $query = "SELECT id, area_code, number FROM phones WHERE student_id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(1, $student->id(), PDO::PARAM_INT);
        $stmt->execute();

        $phones = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($phones as $phone) {
            $phone = new Phone(
                $phone->id,
                $phone->area_code,
                $phone->number
            );

            $student->addPhone($phone);
        }
    }

    public function studentsWithPhones()
    {
        $query = "
            SELECT students.id, 
                students.name, 
                students.birth_date,
                phones.id AS phone_id,
                phones.area_code,
                phones.number
            FROM students
            INNER JOIN phones phones ON phones.student_id = students.id
        ";
        $stmt = $this->connection->query($query);
        $results = $stmt->fetchAll(PDO::FETCH_OBJ);

        var_dump($results);die();
        $studentList = [];
        foreach ($results as $result) {
            if (!array_key_exists($result->id, $studentList)) {
                $studentList[$result->id] = new Student(
                    $result->id,
                    $result->name,
                    new DateTimeImmutable($result->birth_date)
                );
            }
            $phone = new Phone($result->id, $result->areaCode, $result->number);
            $studentList[$result->id]->addPhone($phone);
        }

        return $studentList;
    }
}