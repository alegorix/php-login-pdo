<?php 
include('connect.php');

$email = $_POST['email'];
$password = md5($_POST['password']);


$query = $db->query("Select * from users where email = '$email' and password ='$password' ");
$count = $query->rowcount();
$row = $query->fetch();

if ($count > 0){
session_start();
$_SESSION['id'] = $row['user_id'];
header('location:home.php');

require_once('close.php');

        
    }else{
	    //$_SESSION['erreur'] = "Le formulaire est incomplet";
	    header('Location: index.php');
        
    }

?>
