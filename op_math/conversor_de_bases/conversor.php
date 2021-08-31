<?php
	function converter($op_entrada, $op_saida, $numero) {
		/*echo $op_entrada;
		echo "<br>";
		echo $op_saida;
		echo "<br>";
		echo $numero;
		echo "<br>";*/
		switch ($op_entrada) {
			case 'dec':
				if (!eDecimal($numero)) {
					echo "<p id='converter'>".$numero."</p><p id='converter' style='color: red;'> Não é decimal </p>";
				} else {
					switch ($op_saida) {
						case 'bin':
							dec2bin($numero);
						break;
						case 'hex':
							dec2hex($numero);
						break;
						case 'oct':
							dec2oct($numero);
						break;
						default:
							echo "<p id='converter' style='color: blue;'> Decimal: ".$numero."<br>Decimal: ".$numero."<br>";
						break;
					}
				}
			break;

			case 'bin':
				if (!eBinario($numero)) {
					echo "<p id='converter'>".$numero."</p><p id='converter' style='color: red;'> Não é binário </p>";
				} else {
					switch ($op_saida) {
						case 'dec':
							bin2dec($numero);
						break;
						case 'hex':
							echo "<p id='converter'> Em desenvolvimento... </p>";
							//bin2hex($numero);
						break;
						case 'oct':
							echo "<p id='converter'> Em desenvolvimento... </p>";
							//bin2oct($numero);
						break;
					}	
				}
				
			break;

			case 'hex':
				if (!eHexadecimal($numero)) {
					echo "<p id='converter'>".$numero."</p><p id='converter' style='color: red;'> Não é hexadecimal </p>";
				} else {
					switch ($op_saida) {
						case 'dec':
							hex2dec($numero);
						break;
						case 'bin':
							echo "<p id='converter'> Em desenvolvimento... </p>";
							//hex2bin();
						break;
						case 'oct':
							echo "<p id='converter'> Em desenvolvimento... </p>";
							//hex2oct();
						break;
					}
				}
			break;
		
			case 'oct':
				if (!eOctal($numero)) {
					echo "<p id='converter'>".$numero."</p><p id='converter' style='color: red;'> Não é octal </p>";
				} else {
					switch ($op_saida) {
						case 'dec':
							oct2dec($numero);
						break;
						case 'bin':
							echo "<p id='converter'> Em desenvolvimento... </p>";
							//oct2bin();
						break;
						case 'hex':
							echo "<p id='converter'> Em desenvolvimento... </p>";
							//oct2hex();
						break;
					}
				}
			break;
		}
	}

	//Funções para saber se número corresponde a tal base

	function eDecimal($numero){
		$str = strval($numero);
		$achou = true;
		for ($i=0; $i<strlen($str); $i++){
			if ($str[$i] != '0' && $str[$i] != '1' && $str[$i] != '2' && $str[$i] != '3' && $str[$i] != '4' && $str[$i] != '5' && $str[$i] != '6' && $str[$i] != '7' && $str[$i] != '8' && $str[$i] != '9') $achou = false;
		}
		return $achou;
	}

	function eBinario($numero){
		$str = strval($numero);
		$achou = true;
		for ($i=0; $i<strlen($str); $i++){
			if ($str[$i] != '0' && $str[$i] != '1') return false;
			//else $achou = false;
		}
		return $achou;
	}

	function eOctal($numero){
		$str = strval($numero);
		$achou = true;
		for ($i=0; $i<strlen($str); $i++){
			if ($str[$i] != '0' && $str[$i] != '1' && $str[$i] != '2' && $str[$i] != '3' && $str[$i] != '4' && $str[$i] != '5' && $str[$i] != '6' && $str[$i] != '7') $achou = false;
		}
		return $achou;
	}

	function eHexadecimal($numero){
		$str = strval($numero);
		$achou = true;
		for ($i=0; $i<strlen($str); $i++){
			if ($str[$i] != '0' && $str[$i] != '1' && $str[$i] != '2' && $str[$i] != '3' && $str[$i] != '4' && $str[$i] != '5' && $str[$i] != '6' && $str[$i] != '7' && $str[$i] != '8' && $str[$i] != '9' && $str[$i] != 'A' && $str[$i] != 'B' && $str[$i] != 'C' && $str[$i] != 'D' && $str[$i] != 'E' && $str[$i] != 'F' && $str[$i] != 'a' && $str[$i] != 'b' && $str[$i] != 'c' && $str[$i] != 'd' && $str[$i] != 'e' && $str[$i] != 'f') $achou = false;
		}
		return $achou;
	}

	//Conversor de decimais para as demais

	function dec2bin($numero){
		$dec = $numero;
		$result = "";
		while ($numero != 0){
			$resto = $numero % 2;
			//echo "resto = ".$resto."<br>";
			$result .= strval($resto);
			//echo "result = ".$result."<br>";
			$numero = intdiv($numero, 2);
			//echo "numero = ".$numero."<br>";
		}
		echo "<p id='converter' style='color: blue;'> Decimal: ".$dec."<br>Binário: ".strrev($result)."<br>";
	}

	function dec2hex($numero) {
		$hex = $numero;
		$result = "";
		while ($numero != 0){
			$resto = $numero % 16;
			switch ($resto) {
				case '10':
					$result .= 'A';
				break;
				case '11':
					$result .= 'B';
				break;
				case '12':
					$result .= 'C';
				break;
				case '13':
					$result .= 'D';
				break;
				case '14':
					$result .= 'E';
				break;
				case '15':
					$result .= 'F';
				break;				
				default:
					$result .= strval($resto);
				break;
			}
			$numero = intdiv($numero, 16);
		}
		echo "<p id='converter' style='color: blue;'> Decimal: ".$hex."<br>Hexadecimal: ".strrev($result)."<br>";
	}

	function dec2oct($numero){
		$oct = $numero;
		$result = "";
		while ($numero != 0){
			$resto = $numero % 8;
			$result .= strval($resto);
			$numero = intdiv($numero, 8);
		}
		echo "<p id='converter' style='color: blue;'> Decimal: ".$oct."<br>Octal: ".strrev($result)."<br>";
	}

	//Conversor de binário para as demais

	function bin2dec($numero){
		$str = strval($numero);
		//echo "str = ".$str."<br>";
		$dec = 0;
		for ($i=strlen($str)-1; $i>=0; $i--){
			//if ($str[$i] == '0' || $str[$i] == '1'){
			$j = strlen($str) - 1 - $i;
			$n = intval($str[$j]);
			//echo "n = ".$n."<br>";
			$dec += $n * pow(2, $i);
			//echo "dec = ".$n."* 2 elevado a ".$i." = ".($n*pow(2,$i))."<br>";
			//}
		}
		echo "<p id='converter' style='color: blue;'> Binário: ".$numero."<br>Decimal: ".$dec."<br>";
	}

	//Conversor de hexadecimal para as demais

	function hex2dec($numero){
		$str = strval($numero);
		//echo "str = ".$str."<br>";
		$dec = 0;
		for ($i=strlen($str)-1; $i>=0; $i--){
			$j = strlen($str) - 1 - $i;
			//echo "j = ".$j."<br>";
			$n = $str[$j];
			//echo "str[$j] = ".$n."<br>";
			switch ($n) {
				case 'a': case 'A':
					$n = 10;
				break;
				case 'b': case 'B':
					$n = 11;
				break;
				case 'c': case 'C':
					$n = 12;
				break;
				case 'd': case 'D':
					$n = 13;
				break;
				case 'e': case 'E':
					$n = 14;
				break;
				case 'f': case 'F':
					$n = 15;
				break;
				default:
					$n = intval($str[$j]);
				break;
			}
			//echo "str[$j] = ".$n."<br>";
			$dec += $n * pow(16, $i);
		}
		echo "<p id='converter' style='color: blue;'> Hexadecimal: ".$numero."<br>Decimal: ".$dec."<br>";
	}

	//Conversor de octal para as demais

	function oct2dec($numero){
		$str = strval($numero);
		$oct = 0;
		for ($i=strlen($str)-1; $i>=0; $i--){
			$j = strlen($str) - 1 - $i;
			$n = intval($str[$j]);
			//echo $n."<br>";
			$oct += $n * pow(8, $i);
			//echo "oct = ".$n."* 8 elevado a ".$i." = ".($n*pow(8,$i))."<br>";
		}
		echo "<p id='converter' style='color: blue;'> Octal: ".$numero."<br>Decimal: ".$oct."<br>";
	}
?>