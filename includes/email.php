<?php 
//forma za upis komentara
require_once "../functions.php";
if (isset($_POST['submit'])) {	
	$name=escape_string($_POST['name']);
	$email=escape_string($_POST['email']);
	$message=escape_string($_POST['message']);

	$sql=query("INSERT INTO comments (com_name,com_email,com_msg,com_status) VALUES ('$name','$email','$message','unapproved') ");
	if ($sql) {
		set_message("Hvala sto nas posecujete!!!");
		redirect("../index.php");
	}else{
		redirect("../index.php");
	}

}



?>
