<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Pet</title>
</head>
<body>
<h1>Edit Pets</h1>

<form action="save-register.php" method="POST">
	<div>
		<label>Name</label>
		<input type="text" name="name" placeholder="Name"/>	
	</div>
	<div>
		<label>Gender</label>
		<input type="radio" name="gender" value="Male"/>Male
		<input type="radio" name="gender" value="Female"/>Female	
	</div>
	<div>
		<label>Birthdate</label>
		<input type="date" name="birthdate"/>
	</div>
	<div>
		<label>Owner</label>
		<input type="text" name="owner" placeholder="Name" />
	</div>
	<div>
		<label>Email Address</label>
		<input type="email" name="email" placeholder="email@address.com" >	
	</div>
	<div>
		<label>Address</label>
		<input type="text" name="address">
	</div>
	<div>
		<label>Contact Number</label>
		<input type="tel" name="contact_number">
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