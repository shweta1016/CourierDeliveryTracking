<?php
require_once('database.php');

        $Name = $_POST['name'];
        $PhoneNo = $_POST['phone'];
        $Email = $_POST['email'];
	$Password = $_POST['password'];
	
	
	
	
	
	$sql = "INSERT INTO tbl_userregister (Name, Phone, email, password)
			VALUES ('$Name','$PhoneNo',  '$Email','$Password')";
	dbQuery($sql);
	header('Location: userregistersuccess.php');


?>