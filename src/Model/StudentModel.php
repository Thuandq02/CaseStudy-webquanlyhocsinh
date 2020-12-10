<?php


namespace QLD\Model;


class StudentModel
{
    protected $DBConnect;

    public function __construct()
    {
        $conn = new DBConnect();
        $this->DBConnect = $conn->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `Students`";
        $stmt = $this->DBConnect->query($sql);
        $data = $stmt->fetchAll();
        $students = [];
        foreach ($data as $item) {
            $student = new Students($item["id_class"], $item["NameStudent"], $item["Gender"], $item["Date"], $item["Address"]);
            $student->setId($item["id_student"]);
            array_push($students, $student);
        }
        return $students;
    }

    public function addStudent($product)
    {
        $sql = "INSERT INTO `Students`( `id_class`, `NameStudent`, `Gender`, `Date`, `Address`) VALUES (:id_class,:NameStudent,:Gender,:Date,:Address)";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(":id_class", $product->getId_class());
        $stmt->bindParam(":NameStudent", $product->getNameStudent());
        $stmt->bindParam(":Gender", $product->getGender());
        $stmt->bindParam(":Date", $product->getDate());
        $stmt->bindParam(":Address", $product->getAddress());
        $stmt->execute();

    }

    public function getByStudent($id)
    {
        $sql = "SELECT * FROM `Students` WHERE id_student =:id_student";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(':id_student', $id);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;

    }

    public function editStudent($newStudent)
    {
        $sql = 'update `Students` set `id_class`=:id_class,NameStudent=:NameStudent,Gender=:Gender,Date=:Date,Address=:Address where id_student=:id_student';
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindValue(":id_student", $newStudent->getId());
        $stmt->bindValue(":id_class", $newStudent->getId_class());
        $stmt->bindValue(":NameStudent", $newStudent->getNameStudent());
        $stmt->bindValue(":Gender", $newStudent->getGender());
        $stmt->bindValue(":Date", $newStudent->getDate());
        $stmt->bindValue(":Address", $newStudent->getAddress());
        $stmt->execute();
    }

    public function deleteStudent($id)
    {
        $sql1 = "DELETE FROM Point WHERE id_student =:id_student";
        $stmt = $this->DBConnect->prepare($sql1);
        $stmt->bindParam(':id_student',$id);
        $stmt->execute();

        $sql = "DELETE FROM `Students` WHERE id_student =:id_student";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(':id_student', $id);
        $stmt->execute();
    }

    public function search($key)
    {
        $sql = "SELECT * FROM  `Students` WHERE NameStudent LIKE :key";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(":key", $key);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $arr = [];
        foreach ($data as $item) {
            $student = new Students($item["id_class"], $item["NameStudent"], $item["Gender"], $item["Data"], $item["Address"]);
//            $product->setId($item['id']);
            $student->setId($item["id_student"]);
            array_push($arr, $student);
        }
        return $arr;
    }
}