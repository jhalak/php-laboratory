<?php

namespace App\Event;

use Symfony\Component\EventDispatcher\Event;

class UserRegistered extends Event
{
	public $user;

	public function __construct($user)
	{
		$this->user = $user;
	}
}
