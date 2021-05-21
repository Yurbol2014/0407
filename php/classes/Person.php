<?php

// Здоровье человека не может быть больше 100!
class Person
{
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function  __construct($name, $lastname, $age, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;
    }

   // function sayHi($name)
   // {
   //     return "Hi $name, I`m " . $this->name;
   // }

   // function setHp($hp)
   // {
   //     if ($this->hp + $hp >= 100) $this->hp = 100;
   //     else $this->hp = $this->hp + $hp;
   // }
   // function getHp()
   // {
   //     return $this->hp;
   // }
       function getLastname()
   {
      return $this->lastname;
   }
    function getName()
    {
        return $this->name;
    }
    function getMother()
    {
        return $this->mother;
    }
    function getFather()
    {
        return $this->father;
    }
    function getInfo() {
        return 
        "<h3>A few words about myself</h3><br>"."My name is:".$this->getName()."<br>
        my lastname is: ".$this->getLastname()."<br>
        my father is: ".$this->getFather()->getName()."<br>
        my mother is: ".$this->getMother()->getName()."<br>
        my grandfathers is: ".$this->getMother()->getFather()->getName()." and "
        .$this->getFather()->getFather()->getName()."<br>
        my grandmothers is: ".$this->getMother()->getMother()->getName()." and "
        .$this->getFather()->getMother()->getName();
        
    }
};
$anya= new Person("Anna","Sidorov",72);
$vasya= new Person ("Vasiliy","Sidorov", 68);
$tamara= new Person("Tamara","Petrova", 60);
$igor = new Person("Igor", "Petrov", 38);
$alex = new Person("Alex", "Ivanov", 42,$anya,$vasya);
$olga = new Person("Olga", "Ivanova", 42, $tamara, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

echo $valera->getInfo();

?>
