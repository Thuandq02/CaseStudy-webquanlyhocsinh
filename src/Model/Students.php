<?php


namespace QLD\Model;


class Students
{
    protected $id;
    protected $id_class;
    protected $NameStudent;
    protected $Gender;
    protected $Date;
    protected $Address;
    public function __construct($id_class,$NameStudent,$Gender,$Date,$Address)
    {
        $this->id_class = $id_class;
        $this->NameStudent = $NameStudent;
        $this->Gender = $Gender;
        $this->Date = $Date;
        $this->Address = $Address;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId_class()
    {
        return $this->id_class;
    }

    /**
     * @param mixed $id_class
     */
    public function setId_class($id_class)
    {
        $this->id_class = $id_class;
    }

    /**
     * @return mixed
     */
    public function getNameStudent()
    {
        return $this->NameStudent;
    }

    /**
     * @param mixed $NameStudent
     */
    public function setNameStudent($NameStudent)
    {
        $this->NameStudent = $NameStudent;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * @param mixed $Gender
     */
    public function setGender($Gender)
    {
        $this->Gender = $Gender;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param mixed $Date
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param mixed $Address
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
    }


}