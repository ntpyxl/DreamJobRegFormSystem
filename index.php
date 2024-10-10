<?php require_once 'dbConfig.php' ?>
<?php require_once 'functions.php' ?>

<html>
    <head>
        <title>Software Engineer Accounts</title>
    </head>
    <body>
        Welcome to the Software Engineers Account System. Please input the correct account details below. <br>

        <form action="handleForm.php" method="POST">
            First Name: <input type="text" name="first_name"> <br>
            Last Name: <input type="text" name="last_name"> <br>
            Age: <input type="number" name="age"> <br>

            <!-- KULANG AKO NG GENDER HAHAHAHHAHAHAHAHAHAHAH -->

            Birthdate: <input type="date" name="birth_date"> <br>
            Religion: 
            <select name="religion">
                <option value="catholic">Catholic</option>
                <option value="islam">Islam</option>
                <option value="buddhism">Buddhism</option>
                <option value="inc">INC</option>
                <option value="none">None</option>
            </select> <br>
            Home Address: <input type="text" name="address"> <br>
            Physical Conditions: <input type="text" name="physical_conditions"> <br>

            <input type="submit" name="registerButton" value="Register account!">
        </form>

        <table>
            <tr>
                <th>Employee ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Age</th>
                <th>Birthdate</th>
                <th>Religion</th>
                <th>Home Address</th>
                <th>Date Registered</th>
                <th>Physical Conditions</th>
            </tr>

            <?php $softEngAccs = getAllSoftEngAccs($pdo); ?>
            <?php foreach ($softEngAccs as $row) { ?>
            <tr>
                <td><?php echo $row['employee_id'] ?></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['age'] ?></td>
                <td><?php echo $row['date_of_birth'] ?></td>
                <td><?php echo $row['religion'] ?></td>
                <td><?php echo $row['homeAddress'] ?></td>
                <td><?php echo $row['date_registered'] ?></td>
                <td><?php echo $row['physical_conditions'] ?></td>
            </tr>
            <?php } ?>
        </table>
        <br><br>
        <input type="submit" name="editButton" value="Edit account">
        <input type="submit" name="deleteButton" value="Delete account">
    <body>
</html>
