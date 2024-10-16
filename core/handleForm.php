<html>
	<head>
        <title>Software Engineer Accounts</title>
        <link rel="stylesheet" href="../styles.css?v=<?php echo time(); ?>">
    </head>
	<body>
	</body>
</html>

<?php
require_once 'dbConfig.php';
require_once 'functions.php';

if (isset($_POST['registerButton'])) {
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$age = $_POST['age'];
    $gender = $_POST['gender'];
	$birth_date = $_POST['birth_date'];
	$religion = $_POST['religion'];
	$address = trim($_POST['home_address']);
	$physical_conditions = trim($_POST['physical_conditions']);

	if(empty($first_name) || empty($last_name) || empty($age) || empty($gender) || empty($religion) || empty($address)) {
		echo "<h3> Make sure that no fields are empty</h3>";
		echo '<a href="../index.php">';
        echo '<input type="submit" id="returnHomeButton" value="Okay" style="padding: 6px 8px; margin: 8px 2px;">';
		echo '</a>';
	} else {
        $query = addAccount($pdo, $first_name, $last_name, $age, $gender, $birth_date, $religion, $address, $physical_conditions);
		if ($query) {
			header("Location: ../index.php");
		} else {
			echo "<h2>Insertion failed</h2>";
			echo '<a href="../index.php">';
            echo '<input type="submit" id="returnHomeButton" value="Return to home page" style="padding: 6px 8px; margin: 8px 2px;">';
			echo '</a>';
		}
	}
}

if (isset($_POST['updateButton'])) {
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$age = $_POST['age'];
    $gender = $_POST['gender'];
	$birth_date = $_POST['birth_date'];
	$religion = $_POST['religion'];
	$address = trim($_POST['home_address']);
	$physical_conditions = trim($_POST['physical_conditions']);
    $employee_id = trim($_GET['employee_id']);

	if(empty($first_name) || empty($last_name) || empty($age) || empty($gender) || empty($religion) || empty($address)) {
		echo "<h2>Make sure that no fields are empty</h2>";
		echo '<a href="../index.php">';
        echo '<input type="submit"  id="returnHomeButton" value="Okay" style="padding: 6px 8px; margin: 8px 2px;">';
		echo '</a>';
	} else {
        $query = updateAccount($pdo, $first_name, $last_name, $age, $gender, $birth_date, $religion, $address, $physical_conditions, $employee_id);
		if ($query) {
			header("Location: ../index.php");
		} else {
			echo "<h2>Insertion failed</h2>";
			echo '<a href="../index.php">';
            echo '<input type="submit" id="returnHomeButton" value="Return to home page" style="padding: 6px 8px; margin: 8px 2px;">';
			echo '</a>';
		}
	}
}

if (isset($_POST['deleteButton'])) {
	$query = deleteAccount($pdo, $_GET['employee_id']);
	if ($query) {
		header("Location: ../index.php");
	} else {
		echo "<h2>Deletion failed</h2>";
		echo '<a href="../index.php">';
        echo '<input type="submit" id="returnHomeButton" value="Return to home page" style="padding: 6px 8px; margin: 8px 2px;">';
		echo '</a>';
	}
}

?>