<?php


namespace QLD\Controller;

use QLD\Model\Students;
use QLD\Model\StudentModel;

class StudentController
{
    protected $studentModel;

    public function __construct()
    {
        $this->studentModel = new StudentModel();
    }

    public function showHome()
    {
        include_once "src/View/home.php";
    }

    public function showStudent()
    {
        $students = $this->studentModel->getAll();
        include_once "src/View/listStudent.php";
    }

    public function addStudent()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "src/View/addStudent.php";
        } else {
            $classCode = $_REQUEST["classCode"];
            $name = $_REQUEST["name"];
            $gender = $_REQUEST["gender"];
            $date = $_REQUEST["date"];
            $address = $_REQUEST["address"];
            $student = new Students($classCode, $name, $gender, $date, $address);
            $this->studentModel->addStudent($student);
            header("location:index.php?page=list-student");
        }
    }
    public function editStudent()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_REQUEST['id'];
            $students = $this->studentModel->getByStudent($id);
            include_once "src/View/editStudent.php";
        } else {
            $id = $_REQUEST['id'];
            $classCode = $_REQUEST["classCode"];
            $name = $_REQUEST["name"];
            $gender = $_REQUEST["gender"];
            $date = $_REQUEST["date"];
            $address = $_REQUEST["address"];
            $newStudent = new Students($classCode, $name, $gender, $date, $address);
            $newStudent->setId($id);
            $this->studentModel->editStudent($newStudent);
            header("location:index.php?page=list-student");
        }
    }

    function deleteStudent()
    {
        $id = $_REQUEST["id"];
        $this->studentModel->deleteStudent($id);
        header("location:index.php?page=list-student");
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $search = "%" . $_REQUEST['search'] . "%";
            $students = $this->studentModel->search($search);
            include_once "src/View/search.php";
        }
    }
}