<?php require_once 'core/dbConfig.php' ?>
<?php require_once 'core/functions.php' ?>

<html>
    <head>
        <title>Software Engineer Accounts</title>
        <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <h3> Welcome to the Software Engineers Account System. Please input the correct account details below. </h3>

        <div class="accForm"> 
            <form action="core/handleForm.php" method="POST">
                <label for="first_name">First name:</label>
                <input type="text" name="first_name" id="first_name">

                <label for="last_name">Last name:</label>
                <input type="text" name="last_name" id="last_name">

                <label for="age">Age:</label>
                <input type="number" name="age" id="age" min="0">

                <label for="gender">Gender:</label>
                <select name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Gay">Gay</option>
                    <option value="Lesbian">Lesbian</option>
                    <option value="Transgender">Transgender</option>
                    <option value="Prefer Not To Say">Prefer Not To Say</option>
                </select>

                <label for="birth_date">Birthdate:</label>
                <input type="date" name="birth_date" id="birth_date" min="1970-01-01" max="2024-12-31">

                <label for="religion">Religion:</label>
                <select name="religion" id="religion">
                    <option value="Catholic">Catholic</option>
                    <option value="Islam">Islam</option>
                    <option value="Buddhism">Buddhism</option>
                    <option value="INC">INC</option>
                    <option value="None">None</option>
                </select>

                <label for="home_address">Home Address:</label>
                <input type="text" name="home_address" id="home_address">

                <label for="physical_conditions">Physical Conditions:</label>
                <textarea name="physical_conditions" id="physical_conditions" rows="6" cols="80"></textarea>


                <input type="submit" name="registerButton" value="Register account!">
            </form>
        </div>

        <br>
        <table style="margin-left: auto; margin-right: auto;">
            <tr>
                <th>Employee ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Birthdate</th>
                <th>Religion</th>
                <th>Home Address</th>
                <th>Date Registered</th>
                <th>Physical Conditions</th>
                <th>Actions</th>
            </tr>

            <?php $softEngAccs = getAllSoftEngAccs($pdo); ?>
            <?php foreach ($softEngAccs as $row) { ?>
            <tr>
                <td><?php echo $row['employee_id'] ?></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['age'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['date_of_birth'] ?></td>
                <td><?php echo $row['religion'] ?></td>
                <td><?php echo $row['homeAddress'] ?></td>
                <td><?php echo $row['date_registered'] ?></td>
                <td><?php echo $row['physical_conditions'] ?></td>
                <td>
                    <input type="submit" value="Edit account" onclick="window.location.href='updateAccount.php?employee_id=<?php echo $row['employee_id']; ?>';">
                    <input type="submit" value="Delete account" onclick="window.location.href='deleteAccount.php?employee_id=<?php echo $row['employee_id']; ?>';">
                </td>
            </tr>
            <?php } ?>
        </table>
    <body>
</html>