<?php

/*
$person = array("name" => "Reza", "email" => "rezabaiust@gmail.com", "skills" => array());
echo var_dump($person);
*/


$person = array();
$person["name"] = "Reza";
$person["email"] = "rezabaiust@gmail.com";
$person["skills"] = array("sql", "php", "python");
echo var_dump($person), "\n";
echo gettype($person), "\n\n";


class Person {
    public $name;
    public $email;
    public $skills;

    function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        $this->skills = array();
    }
}
$p1 = new Person("Reza", "rezabaiust@gmail.com");
echo var_dump($p1), "\n"; 

$p2 = new Person("Mahmudul Hasan", "reza@baiust.edu.bd");
echo var_dump($p2), "\n"; 


