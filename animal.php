<?php
class Animal 
{
	public function __construct($name)
	{
		$this->name = $name;
		$this->health = 100;
	}
	public function walk()
	{	
		$this->health -=1;
		return $this;
	}
	public function run()
	{
		$this->health -=5;
		return $this;
	}

	public function displayHealth()
	{
		echo "Name: " . $this->name . "<br>";
		echo "Health Status: " . $this->health . "<br>";
	}	
}

class Dog extends Animal {
	public function __construct()
	{
		parent::__construct('Dog');
		$this->health=150;
	}

	public function pet()
	{
		$this->health+=5;
		return $this;
	}
}

class Dragon extends Animal {

	public function __construct() 
	{
		parent::__construct('Dragon');
		$this->health=170;
	}
	public function fly()
	{
		$this->health-=10;
		return $this;
	}
	public function displayHealth()
	{
		echo "This is a dragon! <br>";
		parent::displayHealth();
	}
}

$animal = new Animal('animal');
$animal->walk()->walk()->walk()->run()->run()->displayHealth();

$dog = new Dog();
$dog->walk()->walk()->walk()->run()->run()->pet()->displayHealth();

$dragon = new Dragon();
$dragon->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();



