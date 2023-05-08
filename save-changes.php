<?php

require "config.php";

use App\Pets;


// Save the Student information, and automatically redirect to index

try {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$birthdate = $_POST['birthdate'];
	$owner = $_POST['owner'];
	$contact_number = $_POST['contact_number'];
	$result = Pets::update($id, $name,$gender,$birthdate,$owner,$email,$address,$contact_number);

	if ($result) {
		header('Location: index.php');
	}

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

