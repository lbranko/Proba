<?php

abstract class Vehicle {

    public $numPerson;
    public $driving = 0;

    function __construct($numPerson) {
        $this->numPerson = $numPerson;
    }

    function stop() {
        $this->driving = 0;
        echo "Vehicle stopped!";
    }

    function drive() {
        if ($this->numPerson <= $this->maxPerson && $this->numPerson > 0) {
            $this->driving = 1;
            echo "Vehicle started!";
        } else if ($this->numPerson <= 0) {
            echo "Cannot start vehicle, vehicle is empty!";
        } else {
            echo "Cannot start vehicle, too many people!";
        }
    }

    function addPerson() {
        if ($this->driving == 0) {
            $this->numPerson++;
            echo "Person added!";
        } else {
            echo "Cannot add person, vehicle is driving!";
        }
    }

    function removePerson() {
        if ($this->numPerson > 0 && $this->driving == 0) {
            $this->numPerson--;
            echo "Person removed";
        } else if ($this->numPerson <= 0) {
            echo "Cannot remove person, vehicle is empty!";
        } else {
            echo "Cannot remove person, vehicle is driving!";
        }
    }

    final public function getDescription() {
        switch ($this->maxPerson) {
            case "1":
                echo"Human-powered, pedal-driven, single-track vehicle";
                break;
            case "5":
                echo "Wheeled, self-powered motor vehicle used for transportation";
                break;
        }
    }

}

class Car extends Vehicle {

    public $maxPerson = 5;

    function getMaxPeople() {
        echo "Max number of person is " . $this->maxPerson;
    }

}

class Bicycle extends Vehicle {

    public $maxPerson = 1;

    function getMaxPeople() {
        echo "Max number of person is " . $this->maxPerson;
    }

}

$car = new Car(4);
echo $car->getDescription(); // Wheeled, self-powered motor vehicle used for transportation
echo "<br>";
echo $car->getMaxPeople();
echo "<br>";
echo $car->drive(); // Vehicle started!
echo "<br>";
echo $car->addPerson(); // Cannot add person, vehicle is driving!
echo "<br>";
echo $car->stop(); // Vehicle stopped!
echo "<br>";
echo $car->addPerson(); // Person added!
echo "<br>";
echo $car->addPerson(); // Person added!
echo "<br>";
echo $car->drive(); // Cannot start vehicle, too many people!
echo "<br>";
echo $car->removePerson();
echo "<br>";
echo $car->drive();
echo "<hr>";


$bike = new Bicycle(2);
echo $bike->getDescription(); // Human-powered, pedal-driven, single-track vehicle
echo "<br>";
echo $bike->getMaxPeople();
echo "<br>";
echo $bike->drive(); // Cannot start vehicle, too many people!
echo "<br>";
echo $bike->removePerson(); // Person removed!
echo "<br>";
echo $bike->drive(); // Vehicle started!
echo "<br>";
echo $bike->removePerson(); // Cannot remove person, vehicle is driving!
echo "<br>";
echo $bike->stop(); // Vehicle stopped!
echo "<br>";
echo $bike->removePerson(); // Person removed!
echo "<br>";
echo $bike->drive(); // Cannot start vehicle, vehicle is empty!
echo "<br>";
echo $bike->addPerson(); // Person added!
echo "<br>";
echo $bike->drive(); // Vehicle started!
echo "<br>";
echo $bike->stop(); // Vehicle stopped!
echo "<br>";
echo $bike->removePerson(); // Person removed!
echo "<br>";
echo $bike->removePerson(); // Cannot remove person, vehicle is empty!