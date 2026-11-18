<?php
session_start();
if(!isset($_SESSION['Username'])){
	header("Location: Login.php");
    exit;
}
?>
<?php
$PageTitle = 'Barbershop';
include('header.php');
?>
    <body>
    <header class="header">
    <h1>Barbershop</h1>
    <nav>
        <a href="Logout.php">Logout</a>
    <nav>
    </header>
    </body>
<?php
include ('footer.php');
?>
</html>