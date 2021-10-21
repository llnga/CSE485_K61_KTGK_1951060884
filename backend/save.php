<?php
include 'database.php';

if(isset($_POST['save']))
{	 
	 	$d_name=$_POST['name'];
		$d_sex=$_POST['sex'];
		$d_age=$_POST['age'];
		$d_address=$_POST['address'];
		$d_email=$_POST['email'];
		$d_phone=$_POST['phone'];
		$d_bgrp=$_POST['bgrp'];

		$sql = "INSERT INTO donor(d_name, d_sex, d_age, d_address,d_email, d_phone, d_bgrp) VALUES ('$d_name','$d_sex','$d_age','$d_address','$d_email','$d_phone','$d_bgrp')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}


if(count($_POST)>0){
	if($_POST['type']==1){
		$d_name=$_POST['name'];
		$d_sex=$_POST['sex'];
		$d_age=$_POST['age'];
		$d_address=$_POST['address'];
		$d_email=$_POST['email'];
		$d_phone=$_POST['phone'];
		$d_bgrp=$_POST['bgrp'];

		$sql = "INSERT INTO 'donor'('d_name', 'd_sex', 'd_age', 'd_address', 'd_email', 'd_phone', 'd_bgrp') VALUES ('$d_name','$d_sex','$d_age','$d_address','$d_email','$d_phone','$_bgrp)";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];
		$sql = "UPDATE 'crud' SET 'name'='$name','email'='$email','phone'='$phone','city'='$city' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM 'crud' WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM crud WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>