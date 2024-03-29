<?php
	include_once('db.php');
	include_once('header.html');
	include_once('reducedMenu.html');
	
	$error = '';
	
	if(isset($_POST['submitted'])) {
		$Username=mysqli_real_esc_str_trim('Username');
		$Surname=mysqli_real_esc_str_trim('Surname');
		$email=mysqli_real_esc_str_trim('email');		
		$password=mysqli_real_esc_str_trim('password');
		
		if(!empty($Username) && !empty($Surname) && !empty($email) && !empty($password)){
			$result = mysqli_query($db,"insert into `users` set `name` ='$Username', `surname` ='$Surname', `email`='$email', `password` = MD5('$password') ");
			if (empty($result)) {
				$error = 'Query filed - Please fill all boxes or try another username.';
			} else {
				header('Location: usrAccCrtnSuccess.php');
			}
		} else {
		$error = 'Please fill all.';
		}
	}
	if(!empty($error)){
		echo "<div class='error'>$error</div>";
	}
	?>
	
	<div id='content' >
		<h3>Registration</h3>
		<form action='' method='POST' >
		Name&nbsp;<input type='text' name='Username'><br>
		Surname&nbsp;<input type='text' name='Surname'><br>
		Email&nbsp;<input type='text' name='email' ><br>
		Password&nbsp;<input type='password' name='password'><br>
		
		<input type='hidden' name='submitted' value='true'>
		<input type='submit' value='Register'>
		</form>
	</div>