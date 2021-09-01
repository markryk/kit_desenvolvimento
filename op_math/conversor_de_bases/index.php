<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title> Conversor de bases numéricas </title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="jumbotron" style="background-color: #F6736F;">
					<ul class="nav nav-pills justify-content-end">
					  <li class="nav-item">
					    <a class="nav-link btn btn-outline-dark" href="../index.php"> Início </a>
					  </li>
					</ul>
					<h1 class="display-4"> Conversor de bases numéricas </h1>
					<!--<h2>  </h2>-->
					<hr class="my-4">
					<!--<p class="lead"> Clique em gerar </p>-->
					<form action="#" method="POST">
						<div class="form-row">
							<div class="col">
								<p> Entrada </p>
								<input type="radio" name="entrada" value="dec" id="ent_decimal" checked>
								<label for="ent_decimal"> Decimal </label>
								<br>
								<input type="radio" name="entrada" value="bin" id="ent_binario">
								<label for="ent_binario"> Binário </label>
								<br>
								<input type="radio" name="entrada" value="hex" id="ent_hexadecimal">
								<label for="ent_hexadecimal"> Hexadecimal </label>
								<br>
								<input type="radio" name="entrada" value="oct" id="ent_octal">
								<label for="ent_octal"> Octal </label>
								<br>
							</div>
							<div class="col">
								<p> Saída </p>
								<input type="radio" name="saida" value="dec" id="sd_decimal" checked>
								<label for="sd_decimal"> Decimal </label>
								<br>
								<input type="radio" name="saida" value="bin" id="sd_binario">
								<label for="sd_binario"> Binário </label>
								<br>
								<input type="radio" name="saida" value="hex" id="sd_hexadecimal">
								<label for="sd_hexadecimal"> Hexadecimal </label>
								<br>
								<input type="radio" name="saida" value="oct" id="sd_octal">
								<label for="sd_octal"> Octal </label>
								<br>
							</div>
						</div>
						<br>

						<p> Número </p>
						<input type="text" name="numero" class="form-control" required>

						<br>

						<button class="btn btn-dark btn-lg color" id="generate"> Converter </button>

						<br><br>
					</form>

					<?php
						include_once "conversor.php";
						//include_once 'complete_conversor.php';
						if (isset($_POST['entrada']) || isset($_POST['saida']) || isset($_POST['numero']) || !empty($_POST['numero'])) {
							echo converter($_POST['entrada'], $_POST['saida'], $_POST['numero']);
					?>
							<form action="#" method="POST">
								<input type="hidden" name="ent" value="<?=$_POST['entrada']?>">
								<input type="hidden" name="sda" value="<?=$_POST['saida']?>">
								<input type="hidden" name="num" value="<?=$_POST['numero']?>">
								<button class="btn btn-outline-dark btn-lg" name="details"> Detalhes </button>
								<br><br>
							</form>
					<?php
						}
						if (isset($_POST['details'])) converter($_POST['ent'], $_POST['sda'], $_POST['num']);
					?>
					<br>
					<a href="../"><button class="btn btn-dark btn-lg color"> Voltar </button></a>
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
</body>
</html>