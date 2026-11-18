<?php
session_start();
if(isset($_POST['Username']) && isset($_POST['Password'])){
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	if ($Username === '' || $Password === '') {
		$hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
        $error = "Both username and password are required.";
		echo "<script>alert('$error');</script>";
    } 
	else
		{
	$_SESSION['Username'] = $Username;
	$_SESSION['Password'] = $hashedPassword;
	header("Location: Barbershop.php");
	exit;
	}
}
?>

<?php
$PageTitle = 'Login';
include('header.php');
?>
	<body>
		<header class="header">
		<h1>Login</h1>
		</header>
		<main class = "Sign-in">
		<div class = "center">
		<form id = "login" method = "post">
		<label>Username</label><br>
		<input type="text" id="username" name="Username" class="textfield"><br><br>
		<label>Password</label><br>
		<input type="text" id="password" name="Password" class="textfield"><br>
		<br>
		<input type="submit" value="Login" class="button"><br><br>
		<a href="Register.php">Don't have an account? Register here.</a>
		</form>
		</div>
	</main>
	</body>
<?php
include ('footer.php');
?>
</html>