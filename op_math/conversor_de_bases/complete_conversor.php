<?php
	function complete_conversor($op_entrada, $op_saida, $numero) {
		switch ($op_entrada) {
			case 'dec':
				switch ($op_saida) {
					case 'bin':
						complete_dec2bin($numero);
					break;
					case 'hex':
						complete_dec2hex($numero);
					break;
					case 'oct':
						complete_dec2oct($numero);
					break;
				}
			break;

			case 'bin':
				switch ($op_saida) {
					case 'dec':
						complete_bin2dec($numero);
					break;
					case 'hex':
						complete_bin2hex($numero);
					break;
					case 'oct':
						complete_bin2oct($numero);
					break;
				}				
			break;

			case 'hex':
				switch ($op_saida) {
					case 'dec':
						complete_hex2dec();
					break;
					case 'bin':
						complete_hex2bin();
					break;
					case 'oct':
						complete_hex2oct();
					break;
				}
			break;
		
			case 'oct':
				switch ($op_saida) {
					case 'dec':
						complete_oct2dec($numero);
					break;
					case 'bin':
						complete_oct2bin();
					break;
					case 'hex':
						complete_oct2hex();
					break;
				}
			break;
		}
	}

	//Conversor de decimais para as demais

	function complete_dec2bin($numero){
		$dec = $numero;
		$result = "";
		while ($numero != 0){
			$resto = $numero % 2;
			echo "resto = ".$resto."<br>";
			$result .= strval($resto);
			echo "result = ".$result."<br>";
			$numero = intdiv($numero, 2);
			echo "numero = ".$numero."<br>";
		}
		echo "<p id='converter'> Decimal: ".$dec."<br>Binário: ".strrev($result)."<br>";
	}

	function complete_dec2hex($numero) {
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
		echo "<p id='converter'> Decimal: ".$hex."<br>Hexadecimal: ".strrev($result)."<br>";
	}

	function complete_dec2oct($numero){
		$oct = $numero;
		$result = "";
		while ($numero != 0){
			$resto = $numero % 8;
			$result .= strval($resto);
			$numero = intdiv($numero, 8);
		}
		echo "<p id='converter'> Decimal: ".$oct."<br>Octal: ".strrev($result)."<br>";
	}

	//Conversor de binário para as demais

	function complete_bin2dec($numero){
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
		echo "<p id='converter'> Binário: ".$numero."<br>Decimal: ".$dec."<br>";
	}

	//Conversor de hexadecimal para as demais



	//Conversor de octal para as demais

	function complete_oct2dec($numero){
		$str = strval($numero);
		$oct = 0;
		for ($i=strlen($str)-1; $i>=0; $i--){
			//if ($str[$i] == '0' || $str[$i] == '1'){
			$j = strlen($str) - 1 - $i;
			$n = intval($str[$j]);
			//echo $n."<br>";
			$oct += $n * pow(8, $i);
			//echo "oct = ".$n."* 8 elevado a ".$i." = ".($n*pow(8,$i))."<br>";
			//}
		}
		echo "<p id='converter'> Octal: ".$numero."<br>Decimal: ".$oct."<br>";
	}
?>