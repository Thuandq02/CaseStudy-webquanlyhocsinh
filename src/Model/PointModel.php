<?php


namespace QLD\Model;

use QLD\Model\Point;


class PointModel
{
    protected $DBConnect;
    public function __construct()
    {
        $conn = new DBConnect();
        $this->DBConnect = $conn->connect();
    }
    public function getAll(){
        $sql = "SELECT * FROM `Point`";
        $stmt = $this->DBConnect->query($sql);
        $data = $stmt->fetchAll();

//        $poins = [];
//        foreach ($data as $item){
//            $poin = new Point($item["id_Student"],$item["math"],$item["literature"],$item["english"]);
//            $poin->setIdStudent($item["id_Student"]);
//            array_push($poins,$poin);
//        }
//        return $poins;
        return $data;
    }
    public function addPoint($point) {
        $sql = "INSERT INTO `Point`(`id_Student`, `math`, `literature`, `english`) VALUES (:id_Student,:math,:literature,:english)";
        $stmt  = $this->DBConnect->prepare($sql);
        $stmt->bindParam(":id_Student",$point->getIdStudent());
        $stmt->bindParam(":math",$point->getMath());
        $stmt->bindParam(":literature",$point->getLiterature());
        $stmt->bindParam(":english",$point->getEnglish());
        $stmt->execute();
    }
    public function getByPoint($id)
    {
        $sql = "SELECT * FROM `Students` WHERE id =:id";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;

    }
    public function editPoint($newPoint) {
        $sql = 'update Point set `id_Student`=:id_Student,`math`=:math,`literature`=:literature,`english`=:english';
        $stmt  = $this->DBConnect->prepare($sql);
        $stmt->bindParam(":id_Student",$newPoint->getId());
        $stmt->bindParam(":math",$newPoint->getMath());
        $stmt->bindParam(":literature",$newPoint->getLiterature());
        $stmt->bindParam(":english",$newPoint->getEnglish());
        $stmt->execute();
    }
}