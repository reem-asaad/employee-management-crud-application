<?php
require_once("DB.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="view_style.css">
</head>
<body>
    <table class="styled-table">
       <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>SSN</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Address</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        
        <?php
        global $ConnectingDB;
        $sql = "SELECT * FROM emp_record";
        $stmt = $ConnectingDB->query($sql);
        while($DataRows = $stmt->fetch()) {
            $Id = $DataRows["id"];
            $EName = $DataRows["ename"];
            $SSN = $DataRows["ssn"];
            $Department = $DataRows["dept"];
            $Salary = $DataRows["salary"];
            $Address = $DataRows["address"];
            
            ?>
            <tbody>
            <tr>
                <td><?php echo $Id; ?></td>
                <td><?php echo $EName; ?></td>
                <td><?php echo $SSN; ?></td>
                <td><?php echo $Department; ?></td>
                <td><?php echo $Salary; ?></td>
                <td><?php echo $Address; ?></td>
                <td><a href="update.php?id=<?php echo $Id; ?>">Update</a></td>
                <td><a href="delete.php?id=<?php echo $Id; ?>">Delete</a></td>
            </tr>
            </tbody>
        <?php } ?>
    </table>
</body>
</html>