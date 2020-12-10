<?php


namespace QLD\Controller;

use QLD\Model\Point;
use QLD\Model\PointModel;

class PointController
{
    protected $pointModel;

    public function __construct()
    {
        $this->pointModel = new PointModel();
    }

    public function showPoint()
    {
        $points = $this->pointModel->getAll();

        include_once "src/View/listPoint.php";
    }

    public function CheckPointExist($id_)
    {
        
    }
    
    public function addPoint()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "src/View/add_Point.php";
        } else {
            $id_student = $_REQUEST["studentCode"];
            $math = $_REQUEST["toan"];
            $literature = $_REQUEST["van"];
            $english = $_REQUEST["anh"];
            $point = new Point($id_student, $math, $literature, $english);
            $this->pointModel->addPoint($point);
            header("location:index.php?page=list-point");
        }
    }

    public function editPoint()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_REQUEST['id'];
            $point = $this->pointModel->getByPoint($id);
            include_once "src/View/editPoint.php";
        } else {
            $id = $_REQUEST['id'];
            $studentCode = $_REQUEST["studentCode"];
            $toan = $_REQUEST["toan"];
            $van = $_REQUEST["van"];
            $anh = $_REQUEST["anh"];
            $newPoint = new Point($studentCode, $toan, $van, $anh);
            $this->pointModel->editPoint($newPoint);
            $newPoint->setId($id);
            header("location:index.php?page=list-point");
        }
    }

}