<?php

require "config.php";

use App\Pets;

$pet = Pets::list();
?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<h1>Pets</h1>

<table border="1" cellpadding="5">
<tr>
	<th>ID</th>
	<th>NAME</th>
	<th>GENDER</th>
	<th>BIRTHDATE</th>
	<th>OWNER</th>
	<th>EMAIL</th>
	<th>ADDRESS</th>
	<th>CONTACT</th>
	<th colspan="2">EDIT INFO</th>
</tr>
<?php foreach ($pet as $pet): ?>
<tr>
<td><?php echo $pet->getId(); ?></td>
<td><?php echo $pet->getName(); ?></td>
<td><?php echo $pet->getGender(); ?></td>
<td><?php echo $pet->getBirthdate(); ?></td>
<td><?php echo $pet->getOwner(); ?></td>
<td><?php echo $pet->getEmail(); ?></td>
<td><?php echo $pet->getAddress(); ?></td>
<td><?php echo $pet->getContact(); ?></td>
<td>
	<a href="edit-pet.php?id=<?php echo $pet->getId(); ?>">EDIT</a>
</td>
<td>
	<a href="delete-pet.php?id=<?php echo $pet->getId(); ?>">DELETE</a>
</td>
</tr>
<?php endforeach ?>
<tr>
	<th colspan="5">
		<a href="register.php">Add</a>
	</th>
	<th colspan="5">
		<a href="truncate-table.php">DELETE ALL</a>
	</th>
</tr>
</table>