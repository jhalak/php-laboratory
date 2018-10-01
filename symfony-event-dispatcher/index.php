<?php
/**
 * index.php
 * Event dispatcher
 *
 * @author: Onirudda Odikare Jhalak <jhalak1983@gmail.com>
 * @created on: 10/1/18
 */

use App\Event\UserRegistered;
use App\Listener\CacheNewUser;
use App\Listener\SendWelcomeEmail;
use Symfony\Component\EventDispatcher\EventDispatcher;

require "vendor/autoload.php";

// Create a event dispatcher ( singleton container )
$dispatcher = new EventDispatcher();

// Multiple listeners are added to an event
// 1. SendWelcomeEmail listener is added to UserRegistered event
$listener = new SendWelcomeEmail();
$dispatcher->addListener(UserRegistered::class, [$listener, 'handle']);

// 2. CacheNewUser listener is added to UserRegistered event
$listener = new CacheNewUser();
$dispatcher->addListener(UserRegistered::class, [$listener, 'handle']);

// ........ more event listeners
// ........ more event listeners

// Where user is registered, dispatch the event with data
$event = new UserRegistered((object)['name' => 'Joe']);
$dispatcher->dispatch(UserRegistered::class, $event);