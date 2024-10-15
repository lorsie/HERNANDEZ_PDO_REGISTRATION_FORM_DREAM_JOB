<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "system-ui";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<?php $getEngiByID = getEngiByID($pdo, $_GET['engineerID']); ?>
	<form action="core/handleForms.php?architectID=<?php echo $_GET['engineerID']; ?>" method="POST">
		<h3>Editing the record of an Engineer with an ID of <?php echo $getEngiByID['engineerID'];?>: </h3>
		<p>
            <label for="engineerID">Engineer ID:</label> 
            <input type="text" name="engineerID" value="<?php echo $getEngiByID['engineerID']; ?>">
        </p>
        <p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getEngiByID['firstName']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getEngiByID['lastName']; ?>">
		</p>
		<p>
			<label for="emailAddress">Email Address</label>
			<input type="email" name="emailAddress" value="<?php echo $getEngiByID['emailAddress']; ?>">
		</p>
		<p>
			<label for="contactNumber">Contact Number</label>
			<input type="text" name="contactNumber" value="<?php echo $getEngiByID['contactNumber']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getEngiByID['gender']; ?>">
		</p>
		<p>
			<label for="licenseNumber">License Number</label>
			<input type="text" name="licenseNumber" value="<?php echo $getEngiByID['licenseNumber']; ?>"></p>
		<p>
			<label for="specialization">Specialization</label>
			<input type="text" name="specialization" value="<?php echo $getEngiByID['specialization']; ?>">
			<input type="submit" name="editEngiBtn">
		</p>
	</form>
</body>
</html>
