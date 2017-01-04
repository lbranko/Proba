<?php

class Vehicle {

    public $num_person;
    public $max_person=0;

    /**
     * konstruktor - prima početni broj osoba u vozilu
     * @author Branko
     * @param int $num_person
     */
    function __construct($num_person) {
        $this->num_person = $num_person;
    }

    function drive() {
        if ($this->num_person <= 0) {
            echo "Cannot start vehicle, vehicle is empty!";
        } else if ($this->num_person <= $this->max_person && $this->num_person > 0) {

            echo "Vehicle started!";
        } else {
            echo "Cannot start vehicle, too many people!";
        }
    }

    function stop() {
        echo "Vehicle stopped!";
    }

}

class Car extends Vehicle {

    function __construct() {
      $this->max_person=5;  
    }
    
    function getMaxPeople() {
        echo "Max number of people is 5";
    }

    function getDescription() {
        echo "Wheeled, self-powered motor vehicle used for transportation";
    }

    /**
     * addPerson - metoda dodaje osobu u vozilo - moguće je dodati neograničen broj osoba u vozilo, ali samo dok je vozilo zaustavljeno
     * @global int $num_person
     */
    function addPerson($br=1) {
        //global $num_person;
        $this->num_person+=$br;
    }

    function removePerson() {
        if($this->num_person>0){
        $this->num_person--;
        }
    }

}

class Bicycle extends Vehicle {

    function __construct() {
      //parent::$max_person=1;  
    }
    
    function getMaxPeople() {
        echo "Max number of people is 1";
    }

    /**
     * getDescription - metoda vraća opis pojedinog vozila
     */
    function getDescription() {
        echo "Human-powered, pedal-driven, single-track vehicle";
    }
    
    /**
     * pokreće vozilo - vozilo je moguće pokrenuti samo ako vozilo nije prazno i ako broj osoba ne premašuje broj dozvoljenih osoba
     */
    function drive(){}

}

//echo "<br>trenutni max broj osoba je :".$this->max_person;

$car = new Car(4);
echo "<br>trenutni max broj osoba je :".$car->max_person;

$bike = new Bicycle(2);


echo "<br>trenutni max broj osoba je :".$bike->max_person;

echo"<br>bike->getDescription: ";
echo $bike->getDescription();

echo"<br>bike->getMaxPeople: ";
echo $bike->getMaxPeople();
echo"<br>bike->num_person: ";
echo $bike->num_person;
echo"<br>car->getDescription: ";
echo $car->getDescription();
echo"<br>car->getMaxPeople: ";
echo $car->getMaxPeople();
echo"<br>car->num_person: ";
echo $car->num_person;
echo"<br>car->addPerson: ";
$car->addPerson();
echo"<br>car->addPerson: ";
$car->addPerson();
echo"<br>car->addPerson: ";
$car->addPerson(4);


/*
$car->removePerson();
$car->removePerson();
$car->removePerson();
$car->removePerson();
$car->removePerson();
$car->removePerson();
$car->removePerson();
$car->removePerson();
$car->removePerson();
$car->removePerson();
$car->removePerson();
$car->removePerson();
$car->removePerson();
*/

echo"<br>car->num_person: ";
echo $car->num_person;
echo"<br>car->start: ";
$car->drive();
echo"<br>bike->stop: ";
$bike->stop();
