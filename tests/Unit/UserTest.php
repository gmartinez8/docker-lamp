<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use AppName\User;

class UserTest extends TestCase
{
	public function test_user_class():void
	{
		$user = new User("Gustavo", "gustavo@gmail.com");
		$this->assertInstanceOf(User::class, $user);

		$this->assertSame("Gustavo", $user->name);
		$this->assertSame("gustavo@gmail.com", $user->email);
	}
}
