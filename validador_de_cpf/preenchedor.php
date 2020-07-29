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
					<h1 class="display-4"> Preenchedor de CPF </h1>
					<hr class="my-4">
					<p class="lead"> Digite os 9 primeiros números e mostraremos o CPF completo </p>
					<form action="#" method="POST">
						<label for="cpf"> CPF </label>
						<input class="form-control" type="text" name="user_cpf" id="cpf" required>
						<br>
						<button class="btn btn-dark btn-lg color"> Consultar </button>						
					</form>
					<br><br>
					<?php
						include_once 'cpf_validation.php';
						if (isset($_POST['user_cpf']) || !empty($_POST['user_cpf'])) {
							echo "<p> Digitado: ".$_POST['user_cpf']."</p>";
							echo "<p> CPF completo: ".complete_cpf($_POST['user_cpf'])."</p>";
							//$result = complete_cpf($_POST['user_cpf']);
						}
					?>
					<!--CPF completo <input type="text" id="result" class="form-control-plaintext" readonly value="<?=$result;?>">-->
					<a href="preenchedor.php"><button class="btn btn-dark btn-lg color"> Nova consulta </button></a>&nbsp;
					<a href="index.php"><button class="btn btn-dark btn-lg color"> Voltar </button></a>
					<a style="left: 300px;" href="https://github.com/markryk" class="MarkRyk" target="_blank"> MarkRyk </a>
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

	<script type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("999.999.999");
			$("#result").mask("999.999.999-99");
			//$("#cpf").unmask();
		});
	</script>
</body>
</html>