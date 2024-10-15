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
			width: 100px;
			background-color: #e6ddd8;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to Delete this Record?</h1>
	<?php $getEngiByID = getEngiByID($pdo, $_GET['engineerID']); ?>
	<form action="core/handleForms.php?engineerID=<?php echo $_GET['engineerID']; ?>" method="POST">

		<div class="engiContainer" style="border-style: ridge; 
		font-family: 'system-ui';">
			<p>First Name: <?php echo $getEngiByID['firstName']; ?></p>
			<p>Last Name: <?php echo $getEngiByID['lastName']; ?></p>
			<p>Email Address: <?php echo $getEngiByID['emailAddress']; ?></p>
			<p>Contact Number: <?php echo $getEngiByID['contactNumber']; ?></p>
			<p>Gender: <?php echo $getEngiByID['gender']; ?></p>
			<p>License Number: <?php echo $getEngiByID['licenseNumber']; ?></p>
			<p>Specialization: <?php echo $getEngiByID['specialization']; ?></p>
			<input type="submit" name="deleteEngiBtn" value="Delete">
		</div>
	</form>
</body>
</html>
