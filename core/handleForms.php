<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewEngiBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$emailAddress = trim($_POST['emailAddress']);
    $contactNumber = trim($_POST['contactNumber']);
	$gender = trim($_POST['gender']);
	$licenseNumber = trim($_POST['licenseNumber']);
	$specialization = trim($_POST['specialization']);

    if (!empty($firstName) && !empty($lastName) && !empty($emailAddress) && !empty($contactNumber) && !empty($gender)  && !empty($licenseNumber)  && !empty($specialization)) {
        $query = insertIntoEngiRecords($pdo, $firstName, $lastName, 
        $emailAddress, $contactNumber, $gender, $licenseNumber, $specialization);

    if ($query) {
        header("Location: ../index.php");
    }
    else {
        echo "Insertion failed";
    }
    }

    else {
    echo "Make sure that no fields are empty";
    }
	
}

if (isset($_POST['editEngiBtn'])) {
	$engineerID = isset($_POST['engineerID']) ? trim($_POST['engineerID']) : null;
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$emailAddress = trim($_POST['emailAddress']);
    $contactNumber = trim($_POST['contactNumber']);
	$gender = trim($_POST['gender']);
	$licenseNumber = trim($_POST['licenseNumber']);
	$specialization = trim($_POST['specialization']);

	echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    if ($engineerID === null || $engineerID === '' ||
    $firstName === '' || $lastName === '' || $emailAddress === '' || $contactNumber === '' || $gender === '' || $licenseNumber  === '' || $specialization ==='') {
        echo "Make sure that all fields are not empty.";
    } else {
    $query = updateAnEngi($pdo, $engineerID, $firstName, $lastName, $emailAddress, $contactNumber, $gender, $licenseNumber, $specialization);

    if ($query) {
    header("Location: ../index.php");
    }
    else {
    echo "Update failed";
    }

    }

}

if (isset($_POST['deleteEngiBtn'])) {

	$query = deleteAnEngi($pdo, $_GET['engineerID']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}
?>
