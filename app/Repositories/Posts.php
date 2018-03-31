<?php

namespace App\Repositories;

use App\Post;
use App\Redis;

class Posts
{
	protected $redis;

	public function __contsruct(Redis $redis)
	{
		$this->redis = $redis;
	}
	public function all()
	{
		//return all posts
		return Post::all();
	}

	public function find()
	{

	}
}