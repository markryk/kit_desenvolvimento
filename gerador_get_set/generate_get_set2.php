<!DOCTYPE html>
<html>
<head>
	<title> Gerador de Get e Set </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 jumbotron" style="background: #0D8CFF"">
				<?php
					if (isset($_POST['snake']) || $_GET['op'] == "snake") { 
						if (isset($_GET['c'])) $campos = $_GET['c']; else $campos = $_POST['campo']; ?>
						<?php var_dump($campos) ?>
						<h1 class="text-center"> snake_case </h1>
						<hr class="my-4">
						<?php foreach ($campos as $c) {
							echo "public function get_".$c."() {"; ?>
							<br>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<?php echo " return $"."this->".$c.";"; ?>
							<br>
							<?php echo "}"; ?>
							<br><br>
							<?php echo "public function set_".$c."($".$c.") {"; ?>
							<br>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<?php echo "$"."this->".$c." = ".$c.";"; ?>
							<br>
							<?php echo "}"; ?>
							<br><br>
						<?php } ?>
						<br>
						<a href="generate_get_set2.php?op=camel&c=<?=$campos?>" role="button" class="btn btn-dark btn-lg color"> CamelCase </a>
						<!--$_POST['camel'];
						echo "<a href='buttonsGetSet.php'><button class='btn btn-primary btn-lg' name='camel'> CamelCase</button></a>";*/-->
					<?php } elseif (isset($_POST['camel']) || $_GET['op'] == "camel") {
						if (isset($_GET['c'])) $campos = $_GET['c']; else $campos = $_POST['campo']; ?>
						<h1 class="text-center">CamelCase</h1>
						<hr class="my-4">
						<?php foreach ($campos as $c) {
							echo "public function get".ucfirst($c)."() {"; ?>
							<br>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<?php echo " return $"."this->".$c.";"; ?>
							<br>
							<?php echo "}"; ?>
							<br><br>
							<?php echo "public function set".ucfirst($c)."($".$c.") {"; ?>
							<br>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<?php echo "$"."this->".$c." = ".$c.";"; ?>
							<br>
							<?php echo "}"; ?>
							<br><br>
							<a href="generate_get_set2.php?op=snake&c=<?=$campos?>" role="button" class="btn btn-dark btn-lg color"> snake_case </a>
						<?php }
				} ?>
				<a href="index.php"><button class="btn btn-dark btn-lg color">Voltar</button></a>
				<a href="https://github.com/markryk" class="MarkRyk" target="_blank"> MarkRyk </a>
			</div>
			<div class=" col-md-2"></div>
		</div>
	</div>

	<!-- JS p/ Bootstrap (os 3, nessa ordem; esse trecho deve vir antes de quaisquer outros scripts)-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>