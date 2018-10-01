<?php
/**
 * iterator.php
 * Require php 7.1
 *
 * @author: Onirudda Odikare Jhalak <jhalak1983@gmail.com>
 * @created on: 9/27/18
 */

function dumpAll(iterable $items) {
	foreach ($items as $item) {
		var_dump($item);
	}
}

dumpAll(['one', 'two', 'three']);

class Collection implements IteratorAggregate {

	private $items;

	public function __construct($items)
	{
	    $this->items = $items;
	}

	public function getIterator()
	{
		return new ArrayIterator($this->items);
	}
}


$collection = new Collection(['four', 'five', 'six']);

dumpAll($collection);