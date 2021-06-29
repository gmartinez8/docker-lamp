<?php

namespace AppName;

class Author extends User
{
	public $experience;

	public function __construct($name = "", $email = "", $experience = "")
	{
		$this->experience = $experience;
		parent::__construct($name, $email);
	}
}