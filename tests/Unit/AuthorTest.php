<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use AppName\Author;

class AuthorTest extends TestCase
{
	public function test_author_class():void
	{
		$author = new Author("John Doe", "john@doe.com", 5);
		$this->assertInstanceOf(Author::class, $author);

		$this->assertSame("John Doe", $author->name);
		$this->assertSame("john@doe.com", $author->email);
		$this->assertSame(5, $author->experience);
	}
}