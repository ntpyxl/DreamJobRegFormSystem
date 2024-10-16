<?php
require_once 'dbConfig.php';

function addAccount($pdo, $first_name, $last_name, $age, $gender, $birthdate, $religion, $address, $physical_conditions) {
	$query = "INSERT INTO soft_eng_accounts (first_name, last_name, age, gender, date_of_birth, religion, homeAddress, physical_conditions) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
	$statement = $pdo -> prepare($query);
	$executeQuery = $statement -> execute([$first_name, $last_name, $age, $gender, $birthdate, $religion, $address, $physical_conditions]);
	
    if ($executeQuery) {
		return true;	
	}
}

function getAllSoftEngAccs($pdo) {
	$query = "SELECT * FROM soft_eng_accounts";
	$statement = $pdo -> prepare($query);
	$executeQuery = $statement -> execute();
	
    if ($executeQuery) {
		return $statement->fetchAll();
	}
}

function getAccountByID($pdo, $employee_id) {
	$query = "SELECT * FROM soft_eng_accounts WHERE employee_id = ?";
	$statement = $pdo -> prepare($query);
	
    if ($statement -> execute([$employee_id])) {
		return $statement -> fetch();
	}
}

function updateAccount($pdo, $first_name, $last_name, $age, $gender, $birthdate, $religion, $address, $physical_conditions, $employee_id) {
	$query = "UPDATE soft_eng_accounts
				SET first_name = ?, 
					last_name = ?, 
					age = ?, 
					gender = ?, 
					date_of_birth = ?, 
					religion = ?, 
					homeAddress = ?,
                    physical_conditions = ?
			WHERE employee_id = ?";
	$statement = $pdo -> prepare($query);
	$executeQuery = $statement -> execute([$first_name, $last_name, $age, $gender, $birthdate, $religion, $address, $physical_conditions, $employee_id]);
	
    if ($executeQuery) {
		return true;
	}
}

function deleteAccount($pdo, $employee_id) {
	$query = "DELETE FROM soft_eng_accounts WHERE employee_id = ?";
	$statement = $pdo -> prepare($query);
	$executeQuery = $statement -> execute([$employee_id]);
	
    if ($executeQuery) {
		return true;
	}
}

?>