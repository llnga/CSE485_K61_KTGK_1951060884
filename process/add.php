<?php
include ('../backend/config.php');
if(isset($_POST['save']))
{	 
	 $r_name = $_POST['name'];
	 $r_age = $_POST['age'];
	 $r_bgrp = $_POST['bgrp'];
	 $r_bqnty = $_POST['bqnty'];
	 $r_sex = $_POST['sex'];
	 $r_date = $_POST['date'];
	 $r_phone = $_POST['phone'];

	 $sql = "INSERT INTO blood_recipient (reci_name,reci_age,reci_bgrp,reci_bqnty,reci_sex,reci_reg_date,reci_phno)
	 VALUES ('$r_name','$r_age','$r_bgrp','$r_bqnty','$r_sex','$r_date','$r_phone')";
	 if (mysqli_query($conn, $sql)) {
		Header('location: http://localhost/CSE485_K61_KTGK_1951060884/');
	 } else {
    Header('location: http://localhost/CSE485_K61_KTGK_1951060884/error.php');

	 }
	 mysqli_close($conn);
}
?>