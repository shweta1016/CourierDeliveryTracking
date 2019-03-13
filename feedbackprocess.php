<?php
require_once('database.php');

        $Name = $_POST['txtname'];
        $Email = $_POST['txtemail'];
	$msg = $_POST['txtmsg'];
	$sql = "INSERT INTO feedback(name,email,msg)
			VALUES ('$Name','$Email','$msg')";
	dbQuery($sql);
	header('Location: feedbacksuccess.php');


?>