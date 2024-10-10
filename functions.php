<?php

require_once 'dbConfig.php';

function addAccount($pdo, $first_name, $last_name, $age, $birthdate, $religion, $address, $physical_conditions) {
	$query = "INSERT INTO softengaccounts (first_name, last_name, age, date_of_birth, religion, homeAddress, physical_conditions) VALUES (?, ?, ?, ?, ?, ?, ?)";
	$statement = $pdo -> prepare($query);
	$executeQuery = $statement -> execute([$first_name, $last_name, $age, $birthdate, $religion, $address, $physical_conditions]);
	if ($executeQuery) {
		return true;	
	}
}

function getAllSoftEngAccs($pdo) {
	$query = "SELECT * FROM softengaccounts";
	$statement = $pdo -> prepare($query);
	$executeQuery = $statement -> execute();
	if ($executeQuery) {
		return $statement->fetchAll();
	}
}

?>