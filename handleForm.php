<?php

require_once 'dbConfig.php';
require_once 'functions.php';

if (isset($_POST['registerButton'])) {
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$age = trim($_POST['age']);
	$birth_date = trim($_POST['birth_date']);
	$religion = trim($_POST['religion']);
	$address = trim($_POST['address']);
	$physical_conditions = trim($_POST['physical_conditions']);

	if(!empty($first_name) && !empty($last_name) && !empty($age) && !empty($birth_date) && !empty($religion) && !empty($address) && !empty($physical_conditions)) {
			$query = addAccount($pdo, $first_name, $last_name, $age, $birth_date, $religion, $address, $physical_conditions);
		if ($query) {
			header("Location: index.php");
		} else {
			echo "Insertion failed";
		}
	} else {
		echo "Make sure that no fields are empty";
	}
}

?>