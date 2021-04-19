<?php
include "config.php";

if(isset($_POST['id'])){

	$id=$_POST['id'];

	$sql="SELECT * FROM employees WHERE emp_comp_id='$id'";
	$getemp=mysqli_query($con,$sql);
	while ($sqli=mysqli_fetch_array($getemp)) {
		$id=$sqli['id'];
		$employee=$sqli['emp_name'];
		$sql1="SELECT * FROM company WHERE id=".$sqli['emp_comp_id'];
		$getemp1=mysqli_query($con,$sql1);
		$sqli1=mysqli_fetch_array($getemp1);
		echo "<option value='$id'>$employee - ".$sqli1['comapny']."</option>";
	}
}

?>