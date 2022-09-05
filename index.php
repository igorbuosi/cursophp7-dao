<?php
	
	require_once("config.php");
	
	/*$sql = new Sql();
	
	$usuarios = $sql->select("select * from tb_usuarios");
	
	echo json_encode($usuarios);*/
	
	//$igor = new Usuario();
	
	//$igor->loadById(4);

	//echo $igor;
	
	
	//$lista = Usuario::getList();
	
	//echo json_encode($lista);
	
	//$search = Usuario ::search("us");
	
	//echo json_encode($search);
	
	/*$usuario = new Usuario();
	$usuario->login("user","12345");
	
	echo $usuario;
	
	$aluno = new Usuario("aluno","65431");
	
	$aluno->insert();
	
	echo $aluno;*/
	
	$usuario = new Usuario();
	
	$usuario->loadById(8);
	
	$usuario->update("professor","654");
	
	echo $usuario;
	
	

?>