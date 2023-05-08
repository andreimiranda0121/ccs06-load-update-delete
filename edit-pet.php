<?php

require "config.php";

use App\Pets;

$pet_id = $_GET['id'];

$pets = Pets::getById($pet_id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Pet</title>
</head>
<body>
<h1>Edit Pets</h1>

<form action="save-changes.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $pets->getId(); ?>">
	<div>
		<label>Name</label>
		<input type="text" name="name" placeholder="Name" value="<?php echo $pets->getName();?>" />	
	</div>
	<div>
		<label>Gender</label>
		<input type="text" name="gender" value="<?php echo $pets->getGender()?>">
	</div>
	<div>
		<label>Birthdate</label>
		<input type="date" name="birthdate" value="<?php echo $pets->getBirthdate();?>" />
	</div>
	<div>
		<label>Owner</label>
		<input type="text" name="owner" placeholder="Name" value="<?php echo $pets->getOwner();?>" />
	</div>
	<div>
		<label>Email Address</label>
		<input type="email" name="email" placeholder="email@address.com" value="<?php echo $pets->getEmail();?>" />	
	</div>
	<div>
		<label>Address</label>
		<input type="text" name="address" value="<?php echo $pets->getAddress()?>"/>
	</div>
	<div>
		<label>Contact Number</label>
		<input type="text" name="contact_number" value="<?php echo $pets->getContact()?>"/>
	</div>
	<div>
		<button>
			Save
		</button>
		<a href="index.php">Cancel</a>
	</div>
</form>
</body>
</html>