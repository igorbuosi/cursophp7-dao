<?php
	
	require_once("config.php");
	
	/*$sql = new Sql();
	
	$usuarios = $sql->select("select * from tb_usuarios");
	
	echo json_encode($usuarios);*/
	
	$igor = new Usuario();
	
	$igor->loadById(4);
	
	echo $igor;
	

?>