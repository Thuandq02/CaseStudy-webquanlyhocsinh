<?php


namespace QLD\Model;


class ClassStudentModel
{
    protected $DBConnect;
    public function __construct()
    {
        $conn = new DBConnect();
        $this->DBConnect = $conn->connect();
    }
    function getAll(){
        $sql = "SELECT * FROM `Class`";
        $stmt = $this->DBConnect->query($sql);
        $data = $stmt->fetchAll();
        $classs = [];
        foreach ($data as $item){
            $class = new ClassStudent($item["ClassName"]);
            $class->setId($item["id_class"]);
            $class->setClassName($item['ClassName']);
            array_push($classs,$class);
        }
        return $classs;
    }
}