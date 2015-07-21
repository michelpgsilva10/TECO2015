<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Freelancer - Start Bootstrap Theme</title>

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
		<header style="background-color: #eb5534;">
			<div class="container" >
				<div class="row">
					<div class="col-lg-4">
						<img class="img-responsive" src="<?php echo $this->config->item('base_url') ?>/css-sistema/img/portfolio/AAEUFMT.png" alt="">
					</div>
					<div class="col-lg-4">
						<div class="intro-text">
							<span class="name">Teco15</span>
							<hr class="star-primary">
							<span class="skills">Torneio das Engenharias do Centro-Oeste</span>
						</div>
					</div>
					<div class="col-lg-4">
						<img class="img-responsive" src="<?php echo $this->config->item('base_url') ?>/css-sistema/img/portfolio/Toruna.png" alt="">
					</div>
				</div>
			</div>
		</header>
		<!-- About Section -->
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Cadastro</h2>
					<hr class="star-primary">
				</div>
			</div>
			<div class="row">
				<form class="form-horizontal" role="form" method="post" accept-charset="utf-8" action="<?php echo site_url("cadastro/novo"); ?>">
					<div class="col-md-12" style="margin-left: 40px;">
						<div class="col-md-6">
							<!-- Perfil -->
							<div class="form-group" >
								<label for="inputEmail3" class="col-sm-3 control-label">Nome:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="nome" <?php
									if (isset($nome_cliente)) {
										echo("value='" . $nome_cliente . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group" >
								<label for="inputPassword3" class="col-sm-3 control-label">CPF:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="cpf" <?php
									if (isset($cpf)) {
										echo("value='" . $cpf . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group" >
								<label for="inputPassword3" class="col-sm-3 control-label">RG:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="rg" <?php
									if (isset($rg)) {
										echo("value='" . $rg . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">Orgao Expedidor:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="orgao_expeditor" <?php
									if (isset($nacionalidade)) {
										echo("value='" . $nacionalidade . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">R.G.A:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="rga" <?php
									if (isset($cidade_nasc)) {
										echo("value='" . $cidade_nasc . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">Data de Nascimento:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="dta_nasc" <?php
									if (isset($dta_nascimento)) {
										echo("value='" . $dta_nascimento . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group" >
								<label for="inputPassword3" class="col-sm-3 control-label">Curso:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="curso" <?php
									if (isset($curso)) {
										echo("value='" . $curso . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group" >
								<label for="inputPassword3" class="col-sm-3 control-label">Semestre:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="semestre" <?php
									if (isset($semestre)) {
										echo("value='" . $semestre . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group" >
								<label for="inputPassword3" class="col-sm-3 control-label">Email:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="email" <?php
									if (isset($email)) {
										echo("value='" . $email . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group" >
								<label for="inputPassword3" class="col-sm-3 control-label">Telefone Residencial:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="telefone" <?php
									if (isset($telefone)) {
										echo("value='" . $telefone . "'");
									}
									?>>
								</div>
							</div>

						</div>
						<div class="col-md-6">
							<!-- Endereco -->
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">Cidade:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="cidade" <?php
									if (isset($cidade)) {
										echo("value='" . $cidade . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">Estado</label>
								<div class="col-sm-6">
									<select class="form-control" name="estado" >
										<option value="AC" <?php
										if (isset($estado) and $estado == "AC") {
											echo("selected");
										}
										?>>Acre</option>
										<option value="AL" <?php
										if (isset($estado) and $estado == "AL") {
											echo("selected");
										}
										?>>Alagoas</option>
										<option value="AP"<?php
										if (isset($estado) and $estado == "AP") {
											echo("selected");
										}
										?>>Amapá</option>
										<option value="AM" <?php
										if (isset($estado) and $estado == "AM") {
											echo("selected");
										}
										?>>Amazonas</option>
										<option value="BA" <?php
										if (isset($estado) and $estado == "BA") {
											echo("selected");
										}
										?>>Bahia</option>
										<option value="CE" <?php
										if (isset($estado) and $estado == "CE") {
											echo("selected");
										}
										?>>Ceará</option>
										<option value="DF"<?php
										if (isset($estado) and $estado == "DF") {
											echo("selected");
										}
										?>>Distrito Federal</option>
										<option value="ES" <?php
										if (isset($estado) and $estado == "ES") {
											echo("selected");
										}
										?>>Espírito Santo</option>
										<option value="GO" <?php
										if (isset($estado) and $estado == "GO") {
											echo("selected");
										}
										?>>Goiás</option>
										<option value="MA" <?php
										if (isset($estado) and $estado == "MA") {
											echo("selected");
										}
										?>>Maranhão</option>
										<option value="MT" <?php
										if (isset($estado) and $estado == "MT") {
											echo("selected");
										}
										?>>Mato Grosso</option>
										<option value="MS" <?php
										if (isset($estado) and $estado == "MS") {
											echo("selected");
										}
										?>>Mato Grosso do Sul</option>
										<option value="MG" <?php
										if (isset($estado) and $estado == "MG") {
											echo("selected");
										}
										?>>Minas Gerais</option>
										<option value="PA" <?php
										if (isset($estado) and $estado == "PA") {
											echo("selected");
										}
										?>>Pará</option>
										<option value="PB" <?php
										if (isset($estado) and $estado == "PB") {
											echo("selected");
										}
										?>>Paraíba</option>
										<option value="PR" <?php
										if (isset($estado) and $estado == "PR") {
											echo("selected");
										}
										?>>Paraná</option>
										<option value="PE" <?php
										if (isset($estado) and $estado == "PE") {
											echo("selected");
										}
										?>>Pernambuco</option>
										<option value="PI" <?php
										if (isset($estado) and $estado == "PI") {
											echo("selected");
										}
										?>>Piauí</option>
										<option value="RJ" <?php
										if (isset($estado) and $estado == "RJ") {
											echo("selected");
										}
										?>>Rio de Janeiro</option>
										<option value="RS" <?php
										if (isset($estado) and $estado == "RS") {
											echo("selected");
										}
										?>>Rio Grande do Sul</option>
										<option value="RN" <?php
										if (isset($estado) and $estado == "RN") {
											echo("selected");
										}
										?>>Rio Grando do Norte</option>
										<option value="RO" <?php
										if (isset($estado) and $estado == "RO") {
											echo("selected");
										}
										?>>Rondônia</option>
										<option value="RR" <?php
										if (isset($estado) and $estado == "RR") {
											echo("selected");
										}
										?>>Roraima</option>
										<option value="SC" <?php
										if (isset($estado) and $estado == "SC") {
											echo("selected");
										}
										?>>Santa Catarina</option>
										<option value="SP" <?php
										if (isset($estado) and $estado == "SP") {
											echo("selected");
										}
										?>>São Paulo</option>
										<option value="SE" <?php
										if (isset($estado) and $estado == "SE") {
											echo("selected");
										}
										?>>Sergipe</option>
										<option value="TO" <?php
										if (isset($estado) and $estado == "TO") {
											echo("selected");
										}
										?>>Tocantins</option>
									</select>
								</div>

							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">Rua:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="rua" <?php
									if (isset($rua)) {
										echo("value='" . $rua . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">Complemento: </label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="complemento" <?php
									if (isset($complemento)) {
										echo("value='" . $complemento . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">Número:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="num" <?php
									if (isset($num)) {
										echo("value='" . $num . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">Bairro:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="bairro" <?php
									if (isset($bairro)) {
										echo("value='" . $bairro . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">CEP:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="cep" <?php
									if (isset($cep)) {
										echo("value='" . $cep . "'");
									}
									?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">Senha:</label>
								<div class="col-sm-6">
									<input type="password" class="form-control" name="senha">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">Confirmação da Senha:</label>
								<div class="col-sm-6">
									<input type="password" class="form-control" name="senha_confirma">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">Telefone Celular:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="telefone_alt" <?php
									if (isset($telefone_alt)) {
										echo("value='" . $telefone_alt . "'");
									}
									?>>
								</div>
							</div>
						</div>
						<br />
						<!-- Pagamento -->
						<div class="col-md-12" style="margin-left: 100px;">
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Pacote:</label>
								<div class="col-sm-6">
									<select class="form-control" name="pacote">
										<option value = "1" <?php
										if (isset($pacote) and $pacote == "1") {
											echo("selected");
										}
										?>>Pacote Cacique</option>
										<option value = "2" <?php
										if (isset($pacote) and $pacote == "2") {
											echo("selected");
										}
										?>>Pacote Índio Loko</option>
										<option value = "3" <?php
										if (isset($pacote) and $pacote == "3") {
											echo("selected");
										}
										?>>Pacote Guerreiro</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Forma Pagamento</label>
								<div class="col-sm-6">
									<select class="form-control" name="forma_pagamento">
										<option value = "1" <?php
										if (isset($forma_pagamento) and $forma_pagamento == "1") {
											echo("selected");
										}
										?>>Dinheiro</option>
										<option value = "2" <?php
										if (isset($forma_pagamento) and $forma_pagamento == "2") {
											echo("selected");
										}
										?>>Transferência</option>
										<option value = "3" <?php
										if (isset($forma_pagamento) and $forma_pagamento == "3") {
											echo("selected");
										}
										?>>Depósito</option>
										<option value = "4" <?php
										if (isset($forma_pagamento) and $forma_pagamento == "4") {
											echo("selected");
										}
										?>>Cartão</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Numero de Parcelas:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="num_parcelas" <?php
									if (isset($num_parcelas)) {
										echo("value='" . $num_parcelas . "'");
									}
									?>>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-5 col-sm-10">
								<a type="button" class="btn btn-default" href="<?php echo site_url("welcome"); ?>">Voltar</a>
								<button type="submit" class="btn btn-primary">
									Criar
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

		<!-- Contact Form JavaScript -->
		<script src="<?php echo $this->config->item('base_url') ?>/css-sistema/js/jqBootstrapValidation.js"></script>
		<script src="<?php echo $this->config->item('base_url') ?>/css-sistema/js/contact_me.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="<?php echo $this->config->item('base_url') ?>/css-sistema/js/freelancer.js"></script>

	</body>

</html>
