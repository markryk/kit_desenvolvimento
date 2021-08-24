<?php date_default_timezone_set('America/Fortaleza'); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Operações com data e hora </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>		
				<div class="col-md-10 jumbotron" style="background: #1CF5C5">
					<ul class="nav nav-pills justify-content-end">
					  <li class="nav-item">
					    <a class="nav-link btn btn-outline-dark" href="../index.php"> Início </a>
					  </li>
					</ul>
					<h1 class="display-4"> Manipular data e hora </h1>
					<hr class="my-4">
					<p class="lead"> Tabela de comandos para manipular datas e horas </p>
					<br>
					<!--<div class="table-responsive-sm">-->
					<table class="table table-primary table-sm text-center">
						<thead>
							<tr>
								<th> Descrição </th>
								<th> Comando </th>
								<th> Resultado </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td> Data atual </td>
								<td> date('Y-m-d'); </td>
								<td> <?php echo date('Y-m-d'); ?> </td>
							</tr>
							<tr>
								<td> Data atual (modo brasileiro) </td>
								<td> date('d-m-Y'); </td>
								<td> <?php echo date('d-m-Y'); ?> </td>
							</tr>
							<tr>
								<td> Data atual (modo brasileiro c/ barra) </td>
								<td> date('d/m/Y'); </td>
								<td> <?php echo date('d/m/Y'); ?> </td>
							</tr>
							<tr>
								<td> Hora atual </td>
								<td> date('H:i:s'); </td>
								<td> <?php echo date('H:i:s'); ?> </td>
							</tr>
							<tr>
								<td rowspan="3" style="vertical-align: middle;"> Data e hora atuais </td>
								<td> date('Y-m-d H:i:s'); </td>
								<td> <?php echo date('Y-m-d H:i:s'); ?> </td>
							</tr>
							<tr>
								<td> date('Y-m-d H:i:s', time()); </td>
								<td> <?php echo date('Y-m-d H:i:s', time()); ?> </td>
							</tr>
							<tr>
								<td> date('Y-m-d H:i:s', strtotime('now')); </td>
								<td> <?php echo date('Y-m-d H:i:s', strtotime('now')); ?> </td>
							</tr>
							<tr>
								<td> Data e hora atuais + 1 hora </td>
								<td> date("Y-m-d H:i:s", strtotime("+1 hour")); </td>
								<td> <?php echo date("Y-m-d H:i:s", strtotime("+1 hour")); ?> </td>
							</tr>
							<tr>
								<td> Hora atual no formato inteiro (em segundos, a partir de 01/01/1970 00:00:00) </td>
								<td> time(); </td>
								<td> <?php echo time(); ?> </td>
							</tr>
							<tr>
								<td> Hora atual no formato hora </td>
								<td> date("H:i:s", time()); </td>
								<td> <?php echo date("H:i:s", time()); ?> </td>
							</tr>
							<tr>
								<td> Hora atual no formato hora ($h é uma variável qualquer)</td>
								<?php $h = time(); ?>
								<td> <pre> $h = time(); <br> date('H:i:s', $h); </pre> </td>
								<td> <?php echo date('H:i:s', $h); ?> </td>
							</tr>
							<!--<tr>
								<td> date('Y-m-d H:i:s', strtotime('tomorrow')); </td>
								<td> <?php //echo date('Y-m-d H:i:s', strtotime('tomorrow', $h)); ?> </td>
							</tr>
							<tr>
								<td> date('Y-m-d H:i:s', strtotime('yesterday')); </td>
								<td> <?php //echo date('Y-m-d H:i:s', strtotime('yesterday', $h)); ?> </td>
							</tr>-->
							<tr>
								<td> Hora atual no formato hora + 1 segundo </td>
								<td> date('H:i:s', strtotime('+1 second', $h)) </td>
								<td> <?php echo date('H:i:s', strtotime('+1 second', $h)); ?> </td>
							</tr>
							<tr>
								<td> Hora atual no formato hora + 1 minuto </td>
								<td> date('H:i:s', strtotime('+1 minute', $h)) </td>
								<td> <?php echo date('H:i:s', strtotime('+1 minute', $h)); ?> </td>
							</tr>
							<tr>
								<td> Hora atual no formato hora + 1 hora </td>
								<td> date('H:i:s', strtotime('+1 hour', $h)) </td>
								<td> <?php echo date('H:i:s', strtotime('+1 hour', $h)); ?> </td>
							</tr>
							<tr>
								<td> Data atual completa + 1 dia </td>
								<td> date('Y-m-d H:i:s', strtotime('+1 day', $h)) </td>
								<td> <?php echo date('Y-m-d H:i:s', strtotime('+1 day', $h)); ?> </td>
							</tr>
							<tr>
								<td> Data atual completa + 1 mês </td>
								<td> date('H:i:s', strtotime('+1 month', $h)) </td>
								<td> <?php echo date('Y-m-d H:i:s', strtotime('+1 month', $h)); ?> </td>
							</tr>
							<tr>
								<td> Data atual completa + 1 ano </td>
								<td> date('H:i:s', strtotime('+1 year', $h)) </td>
								<td> <?php echo date('Y-m-d H:i:s', strtotime('+1 year', $h)); ?> </td>
							</tr>
							<tr>
								<td> Data e hora específica </td>
								<td> date("Y-m-d H:i:s", strtotime("01 January 2000")) </td>
								<td> <?php echo date("Y-m-d H:i:s", strtotime("01 January 2000")); ?> </td>
							</tr>
							<tr>
								<td> Data e hora específica (curiosidade) </td>
								<td> date("Y-m-d H:i:s", strtotime("30 February 2000")) </td>
								<td> <?php echo date("Y-m-d H:i:s", strtotime("30 February 2000")); ?> </td>
							</tr>
						</tbody>
					</table>
					<!--</div>-->

					<div class="card">
						<div class="card-body">
							<h2 class="display-5 text-center"> Comparações entre datas e horas </h2>
						    <?php
								$h = time();
								/*echo $h;
								echo "<br>";*/
								$data_completa_atual = date("d-m-Y H:i:s", $h);
								//$hora_atual = date("d-m-Y H:i:s", $h);
								$data_completa_atual_after_1min = date("d-m-Y H:i:s", strtotime("+1 minute", $h));
								echo "<br>";
								echo "<strong> Data completa atual: </strong>".$data_completa_atual;
								echo "<br>";
								echo "<strong> Data completa atual +1 minuto: </strong>".$data_completa_atual_after_1min;
								echo "<br>";
								echo ($data_completa_atual > $data_completa_atual_after_1min) ? "$data_completa_atual > $data_completa_atual_after_1min" : "$data_completa_atual < $data_completa_atual_after_1min";
								echo "<br><br>";

								$hora_atual = date("H:i:s", $h);
								//$hora_atual = date("d-m-Y H:i:s", $h);
								$hora_after_1min = date("H:i:s", strtotime("+1 minute", $h));
								echo "<strong> Hora atual: </strong>".$hora_atual;
								echo "<br>";
								echo "<strong> Hora atual +1 minuto: </strong>".$hora_after_1min;
								echo "<br>";
								echo ($hora_atual > $hora_after_1min) ? "$hora_atual > $hora_after_1min" : "$hora_atual < $hora_after_1min";
								echo "<br><br>";

								$date_atual = date('d-m-Y');
								echo "<strong> Data atual: </strong>".$date_atual;
								echo "<br>";
								$date_after_1day = date('d-m-Y', strtotime('+1 day'));
								echo "<strong> Data atual mais 1 dia (amanhã): </strong>".$date_after_1day;
								echo "<br>";
								$date_1day_ago = date('d-m-Y', strtotime('-1 day'));
								echo "<strong> Data atual menos 1 dia (ontem): </strong>".$date_1day_ago;
								echo "<br>";
								echo ($date_atual > $date_after_1day) ? "$date_atual > $date_after_1day" : "$date_atual < $date_after_1day";
								echo "<br>";
								echo ($date_atual > $date_1day_ago) ? "$date_atual > $date_1day_ago" : "$date_atual < $date_1day_ago";
							?>
					  	</div>
					</div>
					
					<a href="https://github.com/markryk" class="MarkRyk" target="_blank"> MarkRyk </a>
				</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	
	<!-- JS p/ Bootstrap (os 3, nessa ordem; esse trecho deve vir antes de quaisquer outros scripts)-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>