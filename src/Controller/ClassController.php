<?php


namespace QLD\Controller;

use QLD\Model\ClassStudent;
use QLD\Model\ClassStudentModel;

class ClassController
{
    protected $classModel;
    public function __construct()
    {
        $this->classModel = new ClassStudentModel();
    }
    function showClass(){
        $classs = $this->classModel->getAll();
        include_once "src/View/listClass.php";
    }
}