<?php

namespace AppName;

class User
{
	public $type;
	public $name;
	public $email;

	public function __construct($name = "", $email="")
	{
		$this->name = $name;
		$this->email = $email;
	}
}