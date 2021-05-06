<?php 

require_once "functions.php";
if (isset($_POST['login'])) {
	$username=escape_string($_POST['username']);
	$password=escape_string($_POST['password']);
	$sql=query("SELECT * FROM users where username= '$username' and password = '$password'");
	$count=mysqli_num_rows($sql);
	if ($count>0) {
		$_SESSION['ADMIN_LOGIN']='yes';
		$_SESSION['username']=$username;
		redirect("admin/view_all_comments.php");
	}else{
		$msg="Please enter correct login details";
	}
}


?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/style_new.css">
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
	<div id="formContent">
		<!-- Tabs Titles -->

		<!-- Icon -->
		<div class="fadeIn first">
			<img src="images/user.png" id="icon" alt="User Icon" />
		</div>

		<!-- Login Form -->
		<form action="login.php" method="post">
			<input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
			<input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
			<input type="submit" class="fadeIn fourth" value="Log In" name="login">
		</form>
		<div class="field_error">
			<?php if (isset($msg)) {
				echo $msg;
			} ?>
		</div>
	</div>
</div>