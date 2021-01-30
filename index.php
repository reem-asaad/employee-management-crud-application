<?php
require_once("DB.php");
if (isset($_POST["Submit"])) {
	if (!empty($_POST["EName"])&&!empty($_POST["SSN"])) {
		$EName = $_POST["EName"];
		$SSN  = $_POST["SSN"];
		$Dept  = $_POST["Dept"];
		$Salary  = $_POST["Salary"];
		$HomeAddress  = $_POST["HomeAddress"];
		global $ConnectingDB;
		$sql = "INSERT INTO emp_record(ename, ssn, dept, salary, address)
		VALUES(:enamE,:ssN,:depT,:salarY,:homeaddresS)";
		$stmt = $ConnectingDB->prepare($sql);
		$stmt->bindValue(':enamE',$EName);
		$stmt->bindValue(':ssN',$SSN);
		$stmt->bindValue(':depT',$Dept);
		$stmt->bindValue(':salarY',$Salary);
		$stmt->bindValue(':homeaddresS',$HomeAddress);
		$Execute = $stmt->execute();
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="index.php" method="post" id="login-form" class="login-form" autocomplete="off" role="main">
        <h1 class="a11y-hidden">Login Form</h1>
        <div>
            <label>
                <input type="text" name="EName">
                <span>Employee Name</span>
            </label>
        </div>
        <div>
            <label>
                <input type="text" name="SSN">
                <span>Social Security Number</span>
            </label>
        </div>
        <div>
            <label>
                <input type="text" name="Dept">
                <span>Department</span>
            </label>
        </div>
        <div>
            <label>
                <input type="text" name="Salary">
                <span>Salary</span>
            </label>
        </div>
        <div>
            <label>
                <input type="text" name="HomeAddress">
                <span>Home Address</span>
            </label>
        </div>
        <input type="submit" name="Submit" value="Submit Your Record">
        <figure aria-hidden="true">
            <div class="person-body"></div>
            <div class="neck skin"></div>
            <div class="head skin">
                <div class="eyes"></div>
                <div class="mouth"></div>
            </div>
            <div class="hair"></div>
            <div class="ears"></div>
            <div class="shirt-1"></div>
            <div class="shirt-2"></div>
        </figure>
    </form>

</body>

</html>
