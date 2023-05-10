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
<thead>
	<td>ID</td>
	<td>NAME</td>
	<td>GENDER</td>
	<td>BIRTHDATE</td>
	<td>OWNER</td>
	<td>EMAIL</td>
	<td>ADDRESS</td>
	<td>CONTACT</td>
	<td colspan="2">EDIT INFO</td>
</thead>
<?php foreach ($pet as $pet): ?>
<tbody>
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
</tbody>
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