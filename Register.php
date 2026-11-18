<?php
session_start();
?>

<?php
$PageTitle = 'Register';
include('header.php');
?>
<body>
	<header class="header">
	<h1>Register</h1>
	</header>
	<main class = "Sign-in">
		<div class = "center">
		<form id = "Register" method = "post">
		<label>Create Username</label><br>
		<input type="text" id="username" name="Username" class = "textfield"><br><br>
		<label>Create Password</label><br>
		<input type="text" id="password" name="Password" class = "textfield"><br>
		<br>
		<input type="submit" value="Register" class="button"><br><br>
		<a href="Login.php">Have an account? Login Here.</a>
		</form>
		</div>
	</main>
</body>
<?php
include ('footer.php');
?>
</html>