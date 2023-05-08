<?php

require "config.php";

use App\Pets;

try {
	Pets::register('Ron','Male','2000-11-04','Andrei','andreimiranda123@gmail.com','Pampanga','1234566789');
	echo "<li>Added 1 student";

	$pet = [
		[
			'name' => 'Eallen',
			'gender' => 'Male',
			'birthdate' => '2000-07-25',
			'owner' => 'Andrei',
			'email' => 'andreimiranda123@gmail.com',
			'address' => 'Pampanga',
			'contact_number' => '1234567'
		],
		[
			'name' => 'ASDASD',
			'gender' => 'Male',
			'birthdate' => '2022-07-25',
			'owner' => 'Andrei',
			'email' => 'andreimiranda123@gmail.com',
			'address' => 'Pampanga',
			'contact_number' => '1321312'
		]
	];
	Pets::registerMany($pet);
	echo "<li>Added " . count($pet) . " more students";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

