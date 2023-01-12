<?php
include("connexion.php");

$login = $_POST['typeEmailX-2'];
$password = $_POST['typePasswordX-2'];

if (empty($login) or empty($password)) {
    header('Location: login_error.php');
}
else{
$sql = "SELECT * FROM `gerant` WHERE login='".$login."'";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($result);

if($row['pass']==$password){
	session_start();
    $_SESSION['login']=$row['login'];
    $_SESSION['pass']=$row['pass'];
    header("Location: modifier_gerant.php");
    }
    else
    {     header('Location: login_error.php');}
    
}
?>