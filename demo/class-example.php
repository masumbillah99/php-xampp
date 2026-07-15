<?php


class Person
{
    public $name;
    public $age;

    public function breathe()
    {
        echo $this->name . " " . "is breathing";
    }
}


$person = new Person();

$person->name = "Doe Choe";
$person->age = 26;

// dd($person->breathe());