<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use AppName\Admin;
use AppName\User;

class ClassesTest extends TestCase
{
	public function test_admin_class(): void
	{
		$user = new User;
		$user->type = new Admin;
		$greetMessage = $user->type->greet();
		$this->assertSame($greetMessage, "Hello Aministrator");
	}
}