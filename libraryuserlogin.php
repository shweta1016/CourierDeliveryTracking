<?php 
require_once('database.php');
function checkUser($email, $password) {
	if($email == 'user' && $password = 'user123') {
		$_SESSION['user_name'] = 'Admin';
		$_SESSION['user_type'] = 'admin-role';
		header('Location: trackstatus.php');
		
	}
		else {
			return "Your Credintials are not a Valid. Please try Again.";
		}		

}

function isUser(){
	if(!isset($_SESSION['email'])){
		header('Location: loginuser.php');
	}
	
}
?>