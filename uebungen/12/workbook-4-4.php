<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Beispiel</title>
</head>

<body>
    <h2>
        Alle Studenten
    </h2>
    <ul>
        <?php
        # https://mars.iuk.hdm-stuttgart.de/~ag189/workbook-4-4.php
        class student
        {
            private $pdo;
            public $id;

            public function __construct($pdo)
            {
                $this->pdo = $pdo;
            }

            public function schreibe($name)
            {
                $stmt = $this->pdo->prepare("UPDATE students SET name = :name WHERE id = :id");
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':id', $this->id);
                $stmt->execute();
            }

            public function lese()
            {
                $stmt = $this->pdo->prepare("SELECT * FROM students WHERE id = :id");
                $stmt->bindParam(':id', $this->id);
                $stmt->execute();
                return $stmt->fetchAll();
            }

            public function legeAn($name)
            {
                $stmt = $this->pdo->prepare("INSERT INTO students (name) VALUES (:name)");
                $stmt->bindParam(':name', $name);
                $stmt->execute();

                $this->id = $this->pdo->lastInsertId();
                return $this->id;
            }

            public static function getAllStudents($pdo)
            {
                $stmt = $pdo->prepare("SELECT * FROM students");
                $stmt->execute();

                # return list of student objects:
                $students = [];
                foreach ($stmt->fetchAll() as $s) {
                    $student = new student($pdo);
                    $student->id = $s['id'];
                    array_push($students, $student);
                }

                return $students;
            }
        }



        $pdo = new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=u-ag189', 'ag189', 'geheim', array('charset' => 'utf8'));

        $student = new student($pdo);

        // Lege einen neuen Kursteilnehmer an
        $student->legeAn('Anna Mustermann');

        // Lese alle Kursteilnehmer
        $students = student::getAllStudents($pdo);


        foreach ($students as $s) {
            $s->schreibe($s->lese()[0]['name'] . '.');
            echo "<li><strong>" . $s->id . ".</strong> " . $s->lese()[0]['name'] . "</li>";
        }

        ?>
    </ul>

</body>

</html>

<style>
    body {
        font-family: sans-serif;
    }
</style>