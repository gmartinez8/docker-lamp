<?php

namespace AppName;

class Post
{
	public $author;
	public $category;
	public $title;
	public $content;

	public function __construct($title = "" , $content = "", Author $author, Category $category)
	{
		$this->title = $title;
		$this->content = $content;
		$this->author = $author;
		$this->category = $category;
	}
}