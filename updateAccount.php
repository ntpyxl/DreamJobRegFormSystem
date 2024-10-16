<?php require_once 'core/dbConfig.php' ?>
<?php require_once 'core/functions.php' ?>

<html>
    <head>
        <title>Software Engineer Accounts</title>
        <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <h3> Please edit the according values as you intend. </h3>

        <?php $getAccountByID = getAccountByID($pdo, $_GET['employee_id']) ?>
        <div class="accForm">
        <form action="core/handleForm.php?employee_id=<?php echo $_GET['employee_id']; ?>" method="POST">
            <label for="first_name">First name:</label>
            <input type="text" name="first_name" id="first_name" value="<?php echo $getAccountByID['first_name']; ?>">

            <label for="last_name">Last name:</label>
            <input type="text" name="last_name" id="last_name" value="<?php echo $getAccountByID['last_name']; ?>">

            <label for="age">Age:</label>
            <input type="number" name="age" id="age" value="<?php echo $getAccountByID['age']; ?>">
            
            <label for="gender">Gender:</label>
            <select name="gender" id="first_name">
                <option value="Male" <?php echo ($getAccountByID['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                <option value="Female" <?php echo ($getAccountByID['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                <option value="Gay" <?php echo ($getAccountByID['gender'] == 'Gay') ? 'selected' : ''; ?>>Gay</option>
                <option value="Lesbian" <?php echo ($getAccountByID['gender'] == 'Lesbian') ? 'selected' : ''; ?>>Lesbian</option>
                <option value="Transgender" <?php echo ($getAccountByID['gender'] == 'Transgender') ? 'selected' : ''; ?>>Transgender</option>
                <option value="Prefer Not To Say" <?php echo ($getAccountByID['gender'] == 'Prefer Not To Say') ? 'selected' : ''; ?>>Prefer Not To Say</option>
            </select> <br>
            
            <label for="birth_date">Birthdate:</label>
            <input type="date" name="birth_date" id="birth_date" value="<?php echo $getAccountByID['date_of_birth']; ?>">

            <label for="religion">Religion:</label>
            <select name="religion" id="first_name" value="<?php echo $getAccountByID['religion']; ?>">
                <option value="Catholic" <?php echo ($getAccountByID['religion'] == 'Catholic') ? 'selected' : ''; ?>>Catholic</option>
                <option value="Islam" <?php echo ($getAccountByID['religion'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                <option value="Buddhism" <?php echo ($getAccountByID['religion'] == 'Buddhism') ? 'selected' : ''; ?>>Buddhism</option>
                <option value="INC" <?php echo ($getAccountByID['religion'] == 'INC') ? 'selected' : ''; ?>>INC</option>
                <option value="None" <?php echo ($getAccountByID['religion'] == 'None') ? 'selected' : ''; ?>>None</option>
            </select>
            
            <label for="home_address">Home Address:</label>
            <input type="text" name="home_address" id="home_address" value="<?php echo $getAccountByID['homeAddress']; ?>">
            
            <label for="physical_conditions">Physical Conditions:</label>
            <textarea name="physical_conditions" id="physical_conditions" rows="6" cols="80" maxlength="512"><?php echo $getAccountByID['physical_conditions']; ?></textarea>


            <input type="submit" name="updateButton" value="Apply changes">
        </form>
        </div>

            <input type="submit" value="Cancel" onclick="window.location.href='index.php'">
    <body>
</html>