<?php
class Student {

    private $name;
    private $age;
    private $address;

    /*function __construct($name, $age, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }*/

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        if($this->age < 0 ){
            return 'Age can not be negative';
        } elseif($this->age == 0){
            return 'You are not born yet';
        } else {
            return $this->age;
        }

    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function addStudent ($name, $age, $address){

    }

    public function removeStudent ($stdId){

    }

    public function updateStudent ($stdId){

    }

    public function suspendStudent ($stdId){

    }
}