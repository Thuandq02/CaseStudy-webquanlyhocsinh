<?php


namespace QLD\Model;


class Point
{
    protected $id;
    protected $id_student;
    protected $math;
    protected $literature;
    protected $english;
    public function __construct($id_student,$math,$literature,$english)
    {
        $this->id_student = $id_student;
        $this->math = $math;
        $this->literature = $literature;
        $this->english = $english;

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
    public function getIdStudent()
    {
        return $this->id_student;
    }

    /**
     * @param mixed $id_student
     */
    public function setIdStudent($id_student)
    {
        $this->id_student = $id_student;
    }

    /**
     * @return mixed
     */
    public function getMath()
    {
        return $this->math;
    }

    /**
     * @param mixed $math
     */
    public function setMath($math)
    {
        $this->math = $math;
    }

    /**
     * @return mixed
     */
    public function getLiterature()
    {
        return $this->literature;
    }

    /**
     * @param mixed $literature
     */
    public function setLiterature($literature)
    {
        $this->literature = $literature;
    }

    /**
     * @return mixed
     */
    public function getEnglish()
    {
        return $this->english;
    }

    /**
     * @param mixed $english
     */
    public function setEnglish($english)
    {
        $this->english = $english;
    }

}