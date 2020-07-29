<?php
	function simple_validation($cpf_text){
		//$cpf_text = $_POST['user_cpf'];
		if ($cpf_text == "000.000.000-00" || 
			$cpf_text == "111.111.111-11" || 
			$cpf_text == "222.222.222-22" || 
			$cpf_text == "333.333.333-33" || 
			$cpf_text == "444.444.444-44" || 
			$cpf_text == "555.555.555-55" || 
			$cpf_text == "666.666.666-66" || 
			$cpf_text == "777.777.777-77" || 
			$cpf_text == "888.888.888-88" || 
			$cpf_text == "999.999.999-99") return false;
		else {
			$cpf = "";
			for ($i=0; $i<strlen($cpf_text); $i++) {
				if (is_numeric($cpf_text[$i])) $cpf .= $cpf_text[$i];
			}

			$soma = 0;
			for ($i=0; $i<strlen($cpf)-2; $i++){
				$soma += $cpf[$i] * ($i + 1);
			}
			$dig1 = $soma % 11;
			if ($dig1 == 10) $dig1 = 0;
			if ($dig1 == $cpf[9]) {
				$soma = 0;
				for ($i=0; $i<strlen($cpf)-1; $i++) {
					$soma += $cpf[$i] * $i;
				}
				$dig2 = $soma % 11;
				if ($dig2 == 10) $dig2 = 0;
				return ($dig2 == $cpf[10]) ? true : false;
			} else return false;
		}
	}

	function complete_validation($cpf_text) {
		$cpf_text = $_POST['user_cpf'];
		echo "CPF digitado: ".$cpf_text;
		echo "<br><br>";
		//if (strlen($cpf_text) != 14) echo "CPF incompleto";
		if ($cpf_text == "000.000.000-00" || 
			$cpf_text == "111.111.111-11" || 
			$cpf_text == "222.222.222-22" || 
			$cpf_text == "333.333.333-33" || 
			$cpf_text == "444.444.444-44" || 
			$cpf_text == "555.555.555-55" || 
			$cpf_text == "666.666.666-66" || 
			$cpf_text == "777.777.777-77" || 
			$cpf_text == "888.888.888-88" || 
			$cpf_text == "999.999.999-99") echo "CPF inválido";
		else {
			$cpf = "";
			for ($i=0; $i<strlen($cpf_text); $i++) {
				if (is_numeric($cpf_text[$i])) $cpf .= $cpf_text[$i];
			}
			//echo $cpf;

			$soma = 0;
			for ($i=0; $i<strlen($cpf)-2; $i++){
				echo $cpf[$i]." * ".($i + 1)." = ".$cpf[$i] * ($i + 1);
				echo "<br>";
				$soma += $cpf[$i] * ($i + 1);
			}
			echo "Soma -> ".$soma;
			echo "<br>";
			$dig1 = $soma % 11;
			echo $soma." % 11 = ".$dig1;
			echo "<br>";
			if ($dig1 == 10) $dig1 = 0;
			echo "(se o resto for 10, vira 0)";
			echo "<br>";
			echo "Valor esperado: ".$dig1;
			echo "<br>";
			echo "Valor encontrado: ".$cpf[9];
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
				echo $soma." % 11 = ".$dig2;
				echo "<br>";
				if ($dig2 == 10) $dig2 = 0;
				echo"(se o resto for 10, vira 0)";
				echo "<br>";
				echo "Valor esperado: ".$dig2;
				echo "<br>";
				echo "Valor encontrado: ".$cpf[10];
				echo "<br><br>";
				echo ($dig2 == $cpf[10]) ? "CPF válido" : "CPF inválido";
			} else echo "CPF inválido";
			echo "<br>";
		}
	}

	function complete_cpf($cpf_text) {
		$cpf = "";
		for ($i=0; $i<strlen($cpf_text); $i++) {
			if (is_numeric($cpf_text[$i])) $cpf .= $cpf_text[$i];
		}
		$soma = 0;
		for ($i=0; $i<strlen($cpf); $i++){
			$soma += $cpf[$i] * ($i + 1);
		}
		$dig1 = $soma % 11;
		if ($dig1 == 10) $dig1 = 0;
		$cpf .= $dig1;
		$soma = 0;
		for ($i=0; $i<strlen($cpf); $i++) {
			$soma += $cpf[$i] * $i;
		}
		$dig2 = $soma % 11;
		if ($dig2 == 10) $dig2 = 0;
		$cpf .= $dig2;
		return $cpf;
	}
?>