# PHP Object Oriented Programming Practice

## Anminal.php

Assignment: Animal

- Created a class called Animal with the following attributes: 
	- name
	- health: default health is set to be 100 whenever a new instance is creatd. 
- Created a methods:
	- walk: decreases the health by 1.
	- run: decreases the health by 5.
	- displayHealth: displays the name of the Animal and the health.
- Created another class called Dog that inherits everything that the Animal does and have, but 
	1) default health is set to be 150 and 
	2) added a new method called pet which increases the health by 5. 
- Created another classed called Dragon that inherits everything that the Animal does and have, but 
	1) default health is set to be 170
	2) addded a new method called fly, which decreases the health by 10. 
	3) when the Dragon's displayHealth function is called,it says 'this is a dragon!' before it displays the default information 

## Bike.php

- Created a new class called Bike with the following properties/attributes:
	- price
	- max_speed
	- miles
- Created a constructor method: 
	- price and max_speed of each instance required to specify by the user.
	- the initial miles is set to be 0 whenever a new instance is created.

- Added the following functions for this class:
	- displayInfo() - displays the bike's price, maximum speed, and the total miles driven
	- drive() - displays "Driving" on the screen and increases the total miles driven by 10
	- reverse() - displays "Reversing" on the screen and decreases the total miles driven by 5.

## Car.php

- Created a class called Car. In the constructor, allow the user to specify the following attributes: price, speed, fuel, mileage. If the price is greater than 10,000, set the tax to be 15%. Otherwise set the tax to be 12%. 

- A method called Display_all() returns all the information about the car as a string. 
- Display_all() method is called in the constructor to display information about the car when a new car is created.

## Chaining.php

- implemented Bike.php to chain methods. 


## html_helper.php

- Created a class called 'HTML_Helper' that has the following two methods:

	- print_table -> takes an array that has multiple rows of information and make the values of each row appear in the subsequent rows 
	- print_select -> as the input, this method takes an array AND the name that should be used for the select tag; the method returns a string that is formatted in HTML. For example, say that $sample_array = ("CA", "WA", "UT", "TX", "AZ", "NY") and we call print_select("state", $sample_array) method.
