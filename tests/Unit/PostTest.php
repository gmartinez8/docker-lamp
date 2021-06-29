<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use AppName\Author;
use AppName\Category;
use AppName\Post;

class PostTest extends TestCase
{
	public function test_post_class():void
	{
		$author = new Author("John Doe", "john@doe.com", 5);
		$thriller = new Category("Thriller");
		$fantasy = new Category("Fantasy");

		$title = "Loren ipsum";
		$content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";

		$post = new Post($title, $content, $author, $thriller);

		$this->assertInstanceOf(Post::class, $post);
		$this->assertInstanceOf(Author::class, $author);
		$this->assertInstanceOf(Category::class, $thriller);
		
		$this->assertSame($title, $post->title);
		$this->assertSame($content, $post->content);
		
	}
}