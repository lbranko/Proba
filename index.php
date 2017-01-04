<?php

class Vehicle
{
	public $num_person;
	
	function __construct($num_person){
			$this->num_person=$num_person;
		}  
	

	function start(){
		if ($num_person<=5 && num_person>1){
		
		echo "Vehicle started!";
		}
	}
	
	function stop(){
		echo "Vehicle stopped!";
	}
}

    class Car extends Vehicle{
	
function getMaxPeople(){
	echo "Max number of people is 5";
}
		
function getDescription(){
	echo "Wheeled, self-powered motor vehicle used for transportation";
}
		function addPerson(){
			$num_person++;
		}

		function removePerson(){
		$num_person--;
		}
	}

    class Bicycle extends Vehicle{
		
function getMaxPeople(){
	echo "Max number of people is 1";
}
		
function getDescription(){
	echo "Human-powered, pedal-driven, single-track vehicle";
}
    }


$car = new Car(4);
$bike = new Bicycle(2);
echo $bike->getDescription();
echo"<br>";
echo $bike->getMaxPeople();
echo"<br>";
echo $bike->num_person;
echo"<br>";
echo $car->getDescription();
echo"<br>";
echo $car->getMaxPeople();
echo"<br>";
echo $car->num_person;
echo"<br>";
$car->addPerson();
echo"<br>";
echo $car->num_person;
echo"<br>";
$car->start();
echo"<br>";
$bike->stop();



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

