<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
	<script type="text/javascript" src="js/jquery-maskedinput-1.1.4.pack.js"/></script>
	<title> Teste com CPF </title>
</head>
<body>
	<h1> Digite um CPF e diremos se ele é válido ou não (com detalhes)</h1>
	<form action="#" method="POST">
		<label for="cpf"> CPF </label>
		<input type="text" name="user_cpf" id="cpf">
		<button> Consultar </button>
	</form>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("999.999.999-99");
		});
	</script>
	<script type="text/javascript">
		function valida_cpf(cpf) {

		    var Soma;
		    var Resto;
		    Soma = 0;
		  if (cpf == "00000000000") return false;
		     
		  for (i=1; i<=9; i++) Soma = Soma + parseInt(cpf.substring(i-1, i)) * (11 - i);
		  Resto = (Soma * 10) % 11;
		   
		    if ((Resto == 10) || (Resto == 11))  Resto = 0;
		    if (Resto != parseInt(cpf.substring(9, 10)) ) window.alert("CPF inválido"); //return false;
		   
		  Soma = 0;
		    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(cpf.substring(i-1, i)) * (12 - i);
		    Resto = (Soma * 10) % 11;
		   
		    if ((Resto == 10) || (Resto == 11))  Resto = 0;
		    if (Resto != parseInt(cpf.substring(10, 11) ) ) window.alert("CPF inválido"); //return false;
		    //return true;
		    window.alert("CPF válido");
		}
	</script>
</body>
</html>
<?php
	echo "<br>";
	if (isset($_POST['user_cpf'])) {
		//$cpf = $_POST['user_cpf'];
		echo "CPF digitado: ".$_POST['user_cpf'];
		//$arr = str_split($_POST['user_cpf']);
		echo "<br><br>";
		//echo "<pre>";
		//print_r($arr);
		$cpf = "";
		for ($i=0; $i<strlen($_POST['user_cpf']); $i++) {
			if (is_numeric($_POST['user_cpf'][$i])) $cpf .= $_POST['user_cpf'][$i];
		}
		//echo $cpf;

		/*$arr = str_split($cpf);
		echo "<pre>";
			print_r($arr);
		echo "</pre>";*/

		$soma = 0;
		for ($i=0; $i<strlen($cpf)-2; $i++){
			echo $cpf[$i]." * ".($i + 1)." = ".$cpf[$i] * ($i + 1);
			echo "<br>";
			$soma += $cpf[$i] * ($i + 1);
		}
		echo "Soma -> ".$soma;
		echo "<br>";
		$dig1 = $soma % 11;
		if ($dig1 == 10) $dig1 = 0;
		echo "Resto da divisão de ".$soma." por 11: ".$dig1."<br> (se o resto for 10, vira 0)";
		echo "<br><br>";
		if ($dig1 == $cpf[9]) {
			$soma = 0;
			for ($i=0; $i<strlen($cpf)-1; $i++) {
				echo $cpf[$i]." * ".$i." = ".$cpf[$i] * $i;
				echo "<br>";
				$soma += $cpf[$i] * $i;
			}
			echo "Soma -> ".$soma;
			echo "<br>";
			$dig2 = $soma % 11;
			if ($dig2 == 10) $dig2 = 0;
			echo "Resto da divisão de ".$soma." por 11: ".$dig2."<br> (se o resto for 10, vira 0)";
			echo "<br><br>";
			echo ($dig2 == $cpf[10]) ? "CPF válido" : "CPF inválido";
		} else echo "CPF inválido";
		echo "<br>";
		//echo $dig1;
		//echo "</pre>";
		//echo strlen($_POST['user_cpf']);
	}
?>