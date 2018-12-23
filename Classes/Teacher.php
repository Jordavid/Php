<?php
class Teacher
{
    private $name;
    private $email;
    private $number;

    function __construct($name, $email, $number)
    {
        $this->name = $name;
        $this->email = $email;
        $this->number = $number;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function addTeacher($name, $email, $number){

    }

    public function removeTeacher($number){

    }

    public function updateTeacher($number){

    }
}