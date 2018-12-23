<?php
class Employee
{
    private $name;
    private $age;
    private $address;
    private $salary;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getName()
    {
        if(strlen($this->name <= 3)){
            return 'Name should be more than 3 Chars';
        } else{
            return $this->name;
        }

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

    public function getAddress()
    {
        return $this->address;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function getEmpInfo()
    {
        echo 'Name: ' . $this->name . '<br>';
        echo 'Age: ' . $this->age . '<br>';
        echo 'Address: ' . $this->address . '<br>';
        echo 'Salary: ' . $this->salary . ' EGP' .'<br>';
    }
}