<?php
	include('config.php');


	$login =$_POST['login'];
	$pass =$_POST['pass'];

	
	if (validaDatos($login, $pass)) {
		session_start();
		$_SESSION['login']=$login;
		header("location: home.php");
	}else{
		header("location: index.php?code=1");
	}


	function validaDatos($login, $pass){
		$row= mysql_num_rows(mysql_query("SELECT * FROM usuario WHERE login='$login' AND pass='$pass'"));


		if ($row==1) {
			return true;
		}else{
			return false;
		}




	}
?>