<?php

/**
 * Test: Flunorette\Selections: Single row detail.
 * @dataProvider? ../databases.ini
*/



require __DIR__ . '/../connect.inc.php'; // create $connection

Flunorette\Helpers::loadFromFile($connection, __DIR__ . "/../files/{$driverName}-nette_test1.sql");


$book = $connection->table('book')->get(1);  // SELECT * FROM `book` WHERE (`id` = ?)

Assert::same(array(
	'id' => 1,
	'author_id' => 11,
	'translator_id' => 11,
	'title' => '1001 tipu a triku pro PHP',
), $book->toArray());
