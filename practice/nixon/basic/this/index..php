<?php
//Using $this in an object's class code to return data.

$object = new User;
$object->password = "secret";
echo "password: " . $object->get_password();


class User
{
	public $name, $password;
	
	public function get_password()
	{
		return $this->password;
	}
}
?>