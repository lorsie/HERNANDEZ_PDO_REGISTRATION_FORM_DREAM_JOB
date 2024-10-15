<!-- Functions for interacting with the database -->

<?php 

require_once 'dbConfig.php';

function insertIntoEngiRecords($pdo, $firstName, $lastName, 
$emailAddress, $contactNumber, $gender, $licenseNumber, $specialization) {

	$sql = "INSERT INTO engineer_records (firstName, lastName, emailAddress, contactNumber, gender, licenseNumber, specialization) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$firstName, $lastName, $emailAddress, $contactNumber, $gender, $licenseNumber, $specialization]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllEngiRecords($pdo) {
	$sql = "SELECT * FROM engineer_records";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getEngiByID($pdo, $engineerID) {
	$sql = "SELECT * FROM engineer_records WHERE engineerID = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$engineerID])) {
		return $stmt->fetch();
	}
}

function updateAnEngi($pdo, $engineerID, $firstName, $lastName, $emailAddress, $contactNumber, $gender, $licenseNumber, $specialization) {

	$sql = "UPDATE engineer_records 
				SET firstName = ?, 
					lastName = ?, 
					emailAddress = ?, 
					contactNumber = ?, 
					gender = ?, 
					licenseNumber = ?, 
					specialization = ? 
			WHERE engineerID = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$firstName, $lastName, $emailAddress, $contactNumber, $gender, $licenseNumber, $specialization, $engineerID]);

	if ($executeQuery) {
		return true;
	}
}

function deleteAnEngi($pdo, $engineerID) {

	$sql = "DELETE FROM engineer_records WHERE engineerID = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$engineerID]);

	if ($executeQuery) {
		return true;
	}

}
?>
