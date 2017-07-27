<?php
	//conexion
	$link = mysql_connect("localhost", "root", "") or die("Problema al conectarse");
	mysql_select_db("automotora", $link)or die("Problema al conectarse");
?>