<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use AppName\Category;

class CategoryTest extends TestCase
{
	public function test_category_class():void
	{
		$thriller = new Category("Thriller");
		$fantasy = new Category("Fantasy");

		$this->assertInstanceOf(Category::class, $thriller);
		$this->assertInstanceOf(Category::class, $fantasy);

		// Other way to test comparison.
		$this->assertEquals("Thriller", $thriller->name);
		$this->assertSame("Fantasy", $fantasy->name);
	}
}