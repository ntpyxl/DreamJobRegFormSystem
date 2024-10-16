<?php require_once 'core/dbConfig.php' ?>
<?php require_once 'core/functions.php' ?>

<html>
    <head>
        <title>Software Engineer Accounts</title>
        <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <h3> Are you sure you want to delete this account? </h3> <br>

        <?php $getAccountByID = getAccountByID($pdo, $_GET['employee_id']) ?>
        <form action="core/handleForm.php?employee_id=<?php echo $_GET['employee_id']; ?>" method="POST">
            <table>
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
                </tr>
                <tr>
                    <td><?php echo $getAccountByID['employee_id'] ?></td>
                    <td><?php echo $getAccountByID['first_name'] ?></td>
                    <td><?php echo $getAccountByID['last_name'] ?></td>
                    <td><?php echo $getAccountByID['age'] ?></td>
                    <td><?php echo $getAccountByID['gender'] ?></td>
                    <td><?php echo $getAccountByID['date_of_birth'] ?></td>
                    <td><?php echo $getAccountByID['religion'] ?></td>
                    <td><?php echo $getAccountByID['homeAddress'] ?></td>
                    <td><?php echo $getAccountByID['date_registered'] ?></td>
                    <td><?php echo $getAccountByID['physical_conditions'] ?></td>
                </tr>
            </table> <br>
            <input type="submit" name="deleteButton" value="Delete">
        </form>

            <input type="submit" value="Cancel" onclick="window.location.href='index.php'">
    <body>
</html>