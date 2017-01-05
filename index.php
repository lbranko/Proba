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
