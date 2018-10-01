<?php

namespace App\Listener;

use Symfony\Component\EventDispatcher\Event;

class SendWelcomeEmail extends Event
{
	public function handle($event)
	{
		echo "1. sending email to ................" . $event->user->name . '.  ';
	}
}