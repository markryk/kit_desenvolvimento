<!DOCTYPE html>
<html>
<head>
	<title>Gerador de Get e Set</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>		
				<div class="col-md-8 jumbotron" style="background: #0D8CFF">
					<ul class="nav nav-pills justify-content-end">
					  <li class="nav-item">
					    <a class="nav-link btn btn-outline-dark" href="../index.php"> Início </a>
					  </li>
					</ul>
					<h1 class="display-4">Gerador de Get e Set</h1>
					<form action="#" method="POST">
						<hr class="my-4">
						<label>Quantidade de campos</label>
						<input type="number" class="form-control" name="qtde" required>
						<br>
						<button class="btn btn-dark btn-lg"> Criar campos </button>
						<br><br><br>
					</form>
					<?php
						if (isset($_POST['qtde'])) {
							$qt = $_POST['qtde'];
							for ($i=0; $i < $qt; $i++) { 
					?>
								<form class="form-group row" action="generate_get_set.php" method="POST">
									<label for="campo" class="col-sm-3 col-form-label"> Campo <?=($i+1)?> </label>
								    <div class="col-sm-9">
								    	<input type="text" class="form-control" id="campo" name="campo[]" required><br>
								    </div>
						<?php } ?>
									<br>
									<button class="btn2 btn-dark btn-lg color" name="snake"> snake_case </button>
									&nbsp;
									<button class="btn2 btn-dark btn-lg color" name="camel"> CamelCase </button>
								</form>
						<?php } ?>
					<a href="https://github.com/markryk" class="MarkRyk" target="_blank"> MarkRyk </a>
				</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	
	<!-- JS p/ Bootstrap (os 3, nessa ordem; esse trecho deve vir antes de quaisquer outros scripts)-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>