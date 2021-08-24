<?php
	include_once 'Connect.class.php';
	include_once 'Manager.class.php';

	date_default_timezone_set('America/Fortaleza');

	$manager = new Manager();
	$user = $manager->select_common('table_name_cpf', NULL, array("id_user"=>1));
	echo "<pre>";
		var_dump($user);
	echo "</pre>";
	//$manager->update_common('table_name_cpf', array("user_created_in"=>date('Y-m-d H:i:s')), array("id_user"=>1));
	echo "<br><br>";
	$hora_db = $user[0]['user_created_in'];
	echo "Hora no banco: ".$hora_db;
	echo "<br><br>";
	$hora_db_strtotime = strtotime($hora_db);
	echo "Hora do db em strtotime: ".$hora_db_strtotime;
	echo "<br><br>";

	$hora_atual = date('Y-m-d H:i:s');
	echo "Hora atual: ".$hora_atual;
	echo "<br><br>";
	$hora_atual_strtotime = strtotime($hora_atual);
	echo "Hora atual em strtotime: ".$hora_atual_strtotime;

	echo "<br><br>";
	$daqui_uma_hora = date('Y-m-d H:i:s', strtotime("$hora_db +1 hour"));
	echo "Valor de date no banco + 1 hora: ".$daqui_uma_hora;
	echo "<br><br>";
	$daqui_uma_hora_em_strtotime = strtotime($daqui_uma_hora);
	echo $daqui_uma_hora_em_strtotime;

	echo "<br><br>";
	$hora_subtracao = $daqui_uma_hora_em_strtotime - $hora_db_strtotime;
	echo "Diferença: ".$hora_subtracao;


	/*$h1 = $user[0]['user_created_in'];
	$h2 = date('Y-m-d H:i:s', strtotime($h1));
	echo "valor de h1: ".$user[0]['user_created_in'];
	echo "<br><br>";
	echo "Valor de date no banco + 1 hora: ".date('Y-m-d H:i:s', strtotime("$h1 +1 hour"));
	echo "<br><br>";
	echo (int) $h2;
	echo "<br><br>";
	echo (int) ($h);

	echo "Hora atual - hora do db: ".($h - $h2);*/
?>