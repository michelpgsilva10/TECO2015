<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Teco2015</title>

		<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
		<link href="<?php echo $this->config->item('base_url') ?>/css-sistema/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="<?php echo $this->config->item('base_url') ?>/css-sistema/css/freelancer.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="<?php echo $this->config->item('base_url') ?>/css-sistema/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body id="page-top" class="index">

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url("welcome"); ?>">AAEUFMT</a>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>

		<!-- Header -->
		<header style="background-color: #eb5534;" class="col-xs-12 col-sm-12">
			<div class="container" >
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<img class="img-responsive" style="height: 150px; margin-top: 20px;" src="<?php echo $this->config->item('base_url') ?>/css-sistema/img/portfolio/AAEUFMT.png" alt="">
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="intro-text" style="font-size: 9px;">
							<span class="name">Teco15</span>
							<hr class="star-primary">
							<span class="skills">Torneio das Engenharias do Centro-Oeste</span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<img class="img-responsive" style="height: 150px; margin-top: 20px;" src="<?php echo $this->config->item('base_url') ?>/css-sistema/img/portfolio/Toruna.png" alt="">
					</div>
				</div>
			</div>
		</header>
		<!-- About Section -->
		<br />
		<?php
	        if (isset($mensagem)) {
	            echo $mensagem;
	        }
	        echo validation_errors('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>','</div>');
	     ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2><?php echo $nome_cliente; ?></h2>
					<hr class="star-primary">
				</div>
			</div>
			<div class="row">
				<?php
				if ($pacote == "1") {?>
					<p class="text-center"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span>     <strong> PACOTE CACIQUE </strong></p>
                    <p class="text-center">      KIT (CAMISETA + CANECA + TIRANTE + MOCHILA)</p>
                    <p class="text-center">     BONÉ+CHINELO</p>
                    <p class="text-center">     TRANSPORTE + ALOJAMENTO</p>
                    <p class="text-center">     ARENA + FESTAS + JOGOS</p>
				<?php
				}else if ($pacote == "2") {
			?>
					<p class="text-center"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span>     <strong> PACOTE ÍNDIO LOKO   </strong></p>
                    <p class="text-center">     KIT (camiseta + caneca + tirante + mochila)</p>
                    <p class="text-center">     TRANSPORTE + ALOJAMENTO</p>
                    <p class="text-center">     ARENAS + FESTAS + JOGOS</p>
				<?php
						}else if ($pacote == "3") {
					?>
					<p class="text-center"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span>     <strong> PACOTE GUERREIRO </strong></p>
                    <p class="text-center">     KIT (camiseta + caneca + tirante + mochila)</p>
                    <p class="text-center">     TRANSPORTE + ALOJAMENTO </p>
                    <p class="text-center">     ARENAS + JOGOS</p>
				<?php } ?>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2><?php echo "Status do Pagamento"; ?></h2>
					<hr class="star-primary">
				</div>
			</div>
			<div class="row">
				<?php
				if ($cancelado == 1) {
					echo "<p class=\"text-center\" style=\"color: #EE4B4B\"> <strong> Cadastro Cancelado </strong></p>";
				} else if ($pago == 1) {
					echo "<p class=\"text-center\" style=\"color: #EE4B4B\"> <strong> Foi Efetuado o Recebimento do Pagamento </strong></p>";
				} else {
					echo "<p class=\"text-center\" style=\"color: #EE4B4B\"> <strong> Aguardando Pagamento </strong></p>";
				}
			?>
			</div>
			<br />
			<div class="row">
				<div <?php if ($pago != 1 && $cancelado == 0) {?> class="col-md-offset-4" <?php }else{?> class="col-md-offset-5" <?php }?>>
					<div <?php if ($pago != 1 && $cancelado == 0) {?> style="margin-left: 75px;" <?php }else{?> style="margin-left: 61px;" <?php }?>>
						<a type="button" class="btn btn-default" href="<?php echo site_url("welcome"); ?>">Voltar</a>
						<?php
						if ($pago != 1 && $cancelado == 0) {?>
							<a type="button" class="btn btn-primary" href="<?php echo site_url("cadastro/cancelamento/".$id); ?>">Cancelar Cadastro</a>
				    	<?php }?>
				    </div> 
				</div>
			</div>
			<br />
		</div>
		<!-- Footer -->
		<footer class="text-center">
			<div class="footer-above">
				<div class="container">
					<div class="row">
						<div class="footer-col col-md-6">
							<h3>Contato</h3>
							<p>
								Rafael Taques: 9913-0063
								<br>
								Carol Dávalos: 9295-3518
							</p>
						</div>
						<div class="footer-col col-md-6">
							<h3>Around the Web</h3>
							<ul class="list-inline">
								<li>
									<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
								</li>
								<li>
									<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
		<div class="scroll-top page-scroll visible-xs visible-sm">
			<a class="btn btn-primary" href="#page-top"> <i class="fa fa-chevron-up"></i> </a>
		</div>
		<!-- jQuery -->
		<script src="<?php echo $this->config->item('base_url') ?>/css-sistema/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo $this->config->item('base_url') ?>/css-sistema/js/bootstrap.min.js"></script>

		<!-- Plugin JavaScript -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

	</body>

</html>
