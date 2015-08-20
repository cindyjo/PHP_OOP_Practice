<?php
class Car
{
	public function __construct($price, $speed, $fuel, $mileage)
	{
		$this->price = $price;
		if($price > 10000)
		{
			$this->tax = 0.15;
		}
		else 
		{
			$this->tax = 0.12;
		}
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->mileage = $mileage;
		$this->Display_all();
	}

	public function Display_all() 
	{
		echo "Price: " . $this->price ."<br>Speed: " . $this->speed ."mph<br>Fuel: " . $this->fuel ."<br>Mileage: " . $this->mileage . "mpg<br>Tax: " . $this->tax . "<br><br>";

	}
}

$car1 = new Car(2000, 35, 'Full', 15);
$car1 = new Car(2000, 5, 'Not Full', 105);
$car1 = new Car(2000, 15, 'Kind of Full', 25);
$car1 = new Car(2000, 25, 'Full', 25);
$car1 = new Car(2000, 45, 'Empty', 25);
$car1 = new Car(20000000, 35, 'Empty', 15);
?>