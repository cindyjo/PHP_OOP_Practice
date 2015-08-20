<?php

class HTML_Helper 
{
	public function print_table($array)
	{
		$this->array = $array;
		
		echo "<table border=1px> <tr>";
		foreach ($array AS $key =>$value)
		{
			echo "<th> {$key} </th>";
		}
		echo "</tr><tr>";
		foreach($array AS $value)
		{
			echo "<td> {$value} </td>";
		}
		echo "</tr></table>";
	}	

	public function print_select($name, $array)
	{
		$this->name = $name;
		$this->array = $array;
		echo "<select name = {$name}>";
		foreach ($array AS $value)
		{
			echo "<option value = \"{$value}\"> {$value} </option>";
		}
		echo "</select>";
	}
}

$array = ["first_name" => "Michael", "last_name" =>"Choi", "nick_name" => "Sensei"];
$states = array("CA", "WA", "UT", "TX", "AZ", "NY");
$mike = new HTML_Helper;
$mike->print_table($array);
$mike->print_select("state", $states);




?>