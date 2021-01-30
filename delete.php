<?php
require_once("DB.php");
$SearchQueryParameter = $_GET["id"];
if (isset($_POST["Submit"])) {
		$EName = $_POST["EName"];
		$SSN  = $_POST["SSN"];
		$Dept  = $_POST["Dept"];
		$Salary  = $_POST["Salary"];
		$HomeAddress  = $_POST["HomeAddress"];
		global $ConnectingDB;
		$sql ="DELETE FROM emp_record WHERE id='$SearchQueryParameter'";
		$Execute=$ConnectingDB->query($sql);
		if ($Execute) {
			echo '<script>window.open("view.php?id=Record Deleted Successfully","_self")</script>';
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
    <?php
global $ConnectingDB;
$sql ="SELECT * FROM emp_record WHERE id='$SearchQueryParameter'";
$stmt=$ConnectingDB->query($sql);
while ($DataRows = $stmt->fetch()) {
	$Id          = $DataRows["id"];
	$EName       = $DataRows["ename"];
	$SSN         = $DataRows["ssn"];
	$Department  = $DataRows["dept"];
	$Salary      = $DataRows["salary"];
	$HomeAddress = $DataRows["address"];
}
?>
    <form action="delete.php?id=<?php echo $SearchQueryParameter; ?>" method="post" id="login-form" class="login-form" autocomplete="off" role="main">
        <h1 class="a11y-hidden">Login Form</h1>
        <div>
            <label>
                <input type="text" name="EName" value="<?php echo $EName; ?>">
                <span>Employee Name</span>
            </label>
        </div>
        <div>
            <label>
                <input type="text" name="SSN" value="<?php echo $SSN; ?>">
                <span>Social Security Number</span>
            </label>
        </div>
        <div>
            <label>
                <input type="text" name="Dept" value="<?php echo $Department; ?>">
                <span>Department</span>
            </label>
        </div>
        <div>
            <label>
                <input type="text" name="Salary" value="<?php echo $Salary; ?>">
                <span>Salary</span>
            </label>
        </div>
        <div>
            <label>
                <input type="text" name="HomeAddress" value="<?php echo $HomeAddress;
?>">
                <span>Home Address</span>
            </label>
        </div>
        <input type="submit" name="Submit" value="Delete Your Record">
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
