<?php

class User{
	public $name = "User Name";
	public function greet()
	{
		echo "Welcome to OOP <br>";
	}
}

$admin = new User();
$admin->greet();
echo $admin->name


?>