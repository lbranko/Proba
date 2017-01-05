<?php

abstract class Vehicle {

    public $numPerson;
    public $driving = 0;

    function __construct($numPerson) {
        $this->numPerson = $numPerson;
    }

    function stop() {
        $this->driving = 0;
        echo "Vehicle stopped!<br>";
    }

    function drive() {
        if ($this->numPerson <= $this->maxPerson && $this->numPerson > 0) {
            $this->driving = 1;
            echo "Vehicle started!<br>";
        } else if ($this->numPerson <= 0) {
            echo "Cannot start vehicle, vehicle is empty!<br>";
        } else {
            echo "Cannot start vehicle, too many people!<br>";
        }
    }

    function addPerson() {
        if ($this->driving == 0) {
            $this->numPerson++;
            echo "Person added!<br>";
        } else {
            echo "Cannot add person, vehicle is driving!<br>";
        }
    }

    function removePerson() {
        if ($this->numPerson > 0 && $this->driving == 0) {
            $this->numPerson--;
            echo "Person removed<br>";
        } else if ($this->numPerson <= 0) {
            echo "Cannot remove person, vehicle is empty!<br>";
        } else {
            echo "Cannot remove person, vehicle is driving!<br>";
        }
    }

    final public function getDescription() {
        switch ($this->maxPerson) {
            case "1":
                echo"Human-powered, pedal-driven, single-track vehicle<br>";
                break;
            case "5":
                echo "Wheeled, self-powered motor vehicle used for transportation<br>";
                break;
        }
    }

}

class Car extends Vehicle {

    public $maxPerson = 5;

    function getMaxPeople() {
        echo "Max number of person is " . $this->maxPerson . "<br>";
    }

}

class Bicycle extends Vehicle {

    public $maxPerson = 1;

    function getMaxPeople() {
        echo "Max number of person is " . $this->maxPerson . "<br>";
    }

}

$car = new Car(4);
echo $car->getDescription(); // Wheeled, self-powered motor vehicle used for transportation
echo $car->getMaxPeople();
echo $car->drive(); // Vehicle started!
echo $car->addPerson(); // Cannot add person, vehicle is driving!
echo $car->stop(); // Vehicle stopped!
echo $car->addPerson(); // Person added!
echo $car->addPerson(); // Person added!
echo $car->drive(); // Cannot start vehicle, too many people!
echo $car->removePerson();
echo $car->drive();
echo $car->removePerson();
echo $car->stop();

echo "<hr>";

$bike = new Bicycle(2);
echo $bike->getDescription(); // Human-powered, pedal-driven, single-track vehicle
echo $bike->getMaxPeople();
echo $bike->drive(); // Cannot start vehicle, too many people!
echo $bike->removePerson(); // Person removed!
echo $bike->drive(); // Vehicle started!
echo $bike->removePerson(); // Cannot remove person, vehicle is driving!
echo $bike->stop(); // Vehicle stopped!
echo $bike->removePerson(); // Person removed!
echo $bike->drive(); // Cannot start vehicle, vehicle is empty!
echo $bike->addPerson(); // Person added!
echo $bike->drive(); // Vehicle started!
echo $bike->stop(); // Vehicle stopped!
echo $bike->removePerson(); // Person removed!
echo $bike->removePerson(); // Cannot remove person, vehicle is empty!
