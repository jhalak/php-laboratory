<?php

namespace App\Listener;

class CacheNewUser
{
	public function handle($event)
	{
		echo '2. caching...........' . $event->user->name . '.  ';
	}
}
