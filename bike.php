<?php
class Bike 
{

	public function __construct($price, $max_speed)
	{
		$this->price = $price;
		$this->max_speed = $max_speed;
		$this->miles = 0;	
	}

	public function displayInfo() 
	{
		echo "Price of this bike is $" . $this->price . "<br>";
		echo "Max Speed of this bike is " . $this->max_speed . " mph<br>";
		echo "Total miles driven is " . $this->miles . " miles<br>";

	}

	public function drive()
	{
		echo 'Driving' . '<br>';
		$this->miles += 10;
	}

	public function reverse()
	{	
		echo 'Reversing' . '<br>';
		if($this->miles < 0) 
		{
			$this->miles = 0;
		}
		else 
		{
			$this->miles -=5;
		}
	}
}

$bike1 = new Bike(300, 40);
$bike1->displayInfo();
$bike1->drive();
$bike1->drive();
$bike1->drive();
$bike1->reverse();
$bike1->displayInfo();

$bike2 = new Bike(350, 30);
$bike2->reverse();
$bike2->reverse();
$bike2->displayInfo();


?>