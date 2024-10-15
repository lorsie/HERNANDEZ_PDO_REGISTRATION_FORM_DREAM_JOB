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
		  border-collapse: collapse;
		  background-color: #e6ddd8;
		  padding: 3px;
		  text-align: center;
		}
	</style>
</head>
<body>
	<h3>Welcome to the Engineer Registration System. Kindly input your Details here to Register!</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
		<p><label for="emailAddress">Email Address</label> <input type="email" name="emailAddress"></p>
		<p><label for="contactNumber">Contact Number</label> <input type="text" name="contactNumber"></p>
		<p><label for="gender">Gender</label> <input type="text" name="gender"></p>
		<p><label for="licenseNumber">License Number</label> <input type="text" name="licenseNumber"></p>
		<p><label for="specialization">Specialization</label> <input type="text" name="specialization">
		<input type="submit" name="insertNewEngiBtn">
		</p>
	</form>

	<table style="width:50%; margin-top:50px;">
	  <tr>
	    <th>Engineer ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Email Address</th>
	    <th>Contact Number</th>
	    <th>Gender</th>
	    <th>License Number</th>
	    <th>Specialization</th>
	    <th>Action</th>
	  </tr>

	  <?php $seeAllEngiRecords = seeAllEngiRecords($pdo); ?>
	  <?php foreach ($seeAllEngiRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['engineerID']; ?></td>
	  	<td><?php echo $row['firstName']; ?></td>
	  	<td><?php echo $row['lastName']; ?></td>
	  	<td><?php echo $row['emailAddress']; ?></td>
	  	<td><?php echo $row['contactNumber']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['licenseNumber']; ?></td>
	  	<td><?php echo $row['specialization']; ?></td>
	  	<td>
	  		<a href="editengineer.php?engineerID=<?php echo $row['engineerID'];?>">Edit</a>
	  		<a href="deleteengineer.php?engineerID=<?php echo $row['engineerID'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>
