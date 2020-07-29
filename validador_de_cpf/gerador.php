<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title> Operações com CPF </title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="jumbotron" style="background-color: #54E80C;">
					<ul class="nav nav-pills justify-content-end">
					  <li class="nav-item">
					    <a class="nav-link btn btn-outline-dark" href="../index.php"> Início </a>
					  </li>
					</ul>
					<h1 class="display-4"> Gerador de CPF </h1>
					<h2> (para propósitos de desenvolvimento de sistemas) </h2>
					<hr class="my-4">
					<!--<p class="lead"> Clique em gerar </p>-->
					<!--<form action="#" method="POST">-->
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="state"> Estado de origem do CPF </label>
							<select id="state" class="custom-select">
								<option selected> Indiferente </option>
								<option value="2"> AC </option>
								<option value="4"> AL </option>
								<option value="2"> AM </option>
								<option value="2"> AP </option>
								<option value="5"> BA </option>
								<option value="3"> CE </option>
								<option value="1"> DF </option>
								<option value="7"> ES </option>
								<option value="1"> GO </option>
								<option value="3"> MA </option>
								<option value="6"> MG </option>
								<option value="1"> MS </option>
								<option value="1"> MT </option>
								<option value="4"> PA </option>
								<option value="4"> PB </option>
								<option value="4"> PE </option>
								<option value="3"> PI </option>
								<option value="9"> PR </option>
								<option value="7"> RJ </option>
								<option value="4"> RN </option>
								<option value="2"> RO </option>
								<option value="2"> RR </option>
								<option value="0"> RS </option>
								<option value="9"> SC </option>
								<option value="5"> SE </option>
								<option value="8"> SP </option>
								<option value="1"> TO </option>
							</select>
						</div>
					</div>
					<br>

					<button class="btn btn-dark btn-lg color" id="generate" onclick="generate_cpf();"> Gerar </button>

					<br><br>
					<!--</form>-->

					<label for="cpf"> CPF </label>
					<input class="form-control" type="text" name="user_cpf" id="cpf" readonly>
					<br>					

					<a href="index.php"><button class="btn btn-dark btn-lg color"> Voltar </button></a>
					<a style="left: 500px;" href="https://github.com/markryk" class="MarkRyk" target="_blank"> MarkRyk </a>
				</div>				
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<!-- JS p/ Bootstrap (os 3, nessa ordem; esse trecho deve vir antes de quaisquer outros scripts)-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
	<script type="text/javascript" src="js/jquery-maskedinput-1.1.4.pack.js"/></script>

	<script>
		function generate_cpf() {
		//$('#generate').click(function(){
			
			var op = $("#state option:selected").val();
			var strCpf;
			//CPF = cpf.replace(/\D+/g, '');
			var Soma = 0;
			var Resto;
			var i;

			if (isNaN(op)) {
				var CPF = Math.floor(Math.random() * 999999999);
				strCpf = CPF.toString();
			}
			else {
				var CPF = Math.floor(Math.random() * 99999999);
				strCpf = CPF.toString();
				strCpf = strCpf + op;
			}
			if (strCpf.length == 8) strCpf = 0 + strCpf;
			for (i=1; i<=9; i++) Soma = Soma + parseInt(strCpf.substring(i-1, i)) * (11 - i);
			
		  	Resto = (Soma * 10) % 11;

		    if ((Resto == 10) || (Resto == 11))  Resto = 0;

		    strCpf = strCpf + Resto;

		    Soma = 0;
		    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCpf.substring(i-1, i)) * (12 - i);
		    Resto = (Soma * 10) % 11;
		   
		    if ((Resto == 10) || (Resto == 11))  Resto = 0;

		    strCpf = strCpf + Resto;

			//if (strCpf.length == 8) strCpf = 0 + strCpf;
			document.getElementById('cpf').value = strCpf;
			/*document.getElementById('tipo').value = op;
			document.getElementById('tipo2').value = !isNaN(op);*/
		}
		//});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("999.999.999-99");
			//$("#tipo").mask("999.999.999-99");
			//$("#cpf").unmask();
		});
	</script>
</body>
</html>