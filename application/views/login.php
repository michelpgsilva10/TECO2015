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
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Login</h2>
					<hr class="star-primary">
				</div>
			</div>
			<?php
			  if (isset($mensagem)) {
			    echo $mensagem;
			  }
			  echo (validation_errors('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>', '</div>'));
			?>
			<div class="row">
				<form class="form-horizontal" role="form" method="post" accept-charset="utf-8" action="<?php echo site_url("login/logar"); ?>">
					<div class="col-md-12">
						<div class="col-md-12">
							<!-- Perfil -->
							<div class="form-group" >
								<label for="inputEmail3" class="col-sm-3 control-label">Email:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="email" <?php
									if (isset($nome_cliente)) {
										echo("value='" . $nome_cliente . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group" >
								<label for="inputPassword3" class="col-sm-3 control-label">Senha:</label>
								<div class="col-sm-6">
									<input type="password" class="form-control" name="senha" <?php
									if (isset($senha)) {
										echo("value='" . $senha . "'");
									}
									?>>
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-left: 5px;">
							<div class="col-sm-offset-5 col-sm-10">
								<a type="button" class="btn btn-default" href="<?php echo site_url("welcome"); ?>">Voltar</a>
								<button type="submit" class="btn btn-primary">
									Login
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
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
		<script src="<?php echo $this->config->item('base_url') ?>/css-sistema/js/classie.js"></script>
		<script src="<?php echo $this->config->item('base_url') ?>/css-sistema/js/cbpAnimatedHeader.js"></script>
	
	</body>

</html>
