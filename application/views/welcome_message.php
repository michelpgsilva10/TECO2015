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
                <a class="navbar-brand" href="#page-top">AAEUFMT</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Sobre</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Mural</a>
                    </li>                    
                    <li class="page-scroll">
                        <a href="#" data-toggle="modal" data-target="#myModal" >Cadastro</a>
                    </li>
                </ul>
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
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>TORNEIO</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <p class="text-center">O Torneiro de Engenharias do Centro-Oeste (TECO) será realizado em Campo Grande – MS no período de 09 a 12 de Outubro de 2015. Serão 4 dias de evento esportivo que contará com 2 noites de festas totalmente OPEN BAR e mais o HAPPY HOUR também OPEN BAR.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <p class="text-center">O TECO 15 contará com: JOGOS (17 modalidades); ARENA (Entretenimento durante os jogos); FESTAS (Festas noturnas OPEN BAR); HAPPY HOUR (Entretenimento totalmente OPEN BAR)</p>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>ProgramaçãO Do Evento</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <p class="text-center"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>     <strong> DIA 09/10/2015 (Sexta-feira)</strong></p>
                    <p class="text-center">     Jogos + Arena</p>
                    <p class="text-center">     Festa OPEN BAR</p>
                    <p class="text-center"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>     <strong> DIA 10/10/2015 (Sábado)</strong></p>
                    <p class="text-center">     Jogos + Arena</p>
                    <p class="text-center">     Desafio de Bateria + Desafio de Cheerleaders</p>
                    <p class="text-center">      Festa OPEN BAR</p>
                    <p class="text-center"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>     <strong> DIA 11/10/2015 (Domingo)</strong></p>
                    <p class="text-center">     Jogos + Arena</p>
                    <p class="text-center">     Happy Hour extendido OPEN BAR</p>
                    <p class="text-center"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>     <strong> DIA 12/10/2015 (Segunda-feira)</strong></p>
                    <p class="text-center">     Jogos das Finais + Arena</p>
                    <p class="text-center">     Happy Hour com Jogos Etílicos</p>
                    <p class="text-center">     Cerimônia de premiacão</p>
                </div>
            </div>
        </div>
         <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Pacotes Do Evento</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <p class="text-center"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span>     <strong> PACOTE CACIQUE </strong></p>
                    <p class="text-center">      KIT (CAMISETA + CANECA + TIRANTE + MOCHILA)</p>
                    <p class="text-center">     BONÉ+CHINELO</p>
                    <p class="text-center">     TRANSPORTE + ALOJAMENTO</p>
                    <p class="text-center">     ARENA + FESTAS + JOGOS</p>
                    <p class="text-center" style="color: #EE4B4B"> <strong>  DATA LIMITE PARA VENDA: 14/08/2015 </strong></p>
                    <p class="text-center"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span>     <strong> PACOTE ÍNDIO LOKO   </strong></p>
                    <p class="text-center">     KIT (camiseta + caneca + tirante + mochila)</p>
                    <p class="text-center">     TRANSPORTE + ALOJAMENTO</p>
                    <p class="text-center">     ARENAS + FESTAS + JOGOS</p>
                    <p class="text-center" style="color: #EE4B4B"> <strong>  DATA LIMITE PARA VENDA do 1°LOTE ATÉ 15/09/2015 </strong></p>
                    <p class="text-center" style="color: #EE4B4B"> <strong>  DATA LIMITE PARA VENDA do 2°LOTE ATÉ 08/10/2015 </strong></p>
                    <p class="text-center"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span>     <strong> PACOTE GUERREIRO </strong></p>
                    <p class="text-center">     KIT (camiseta + caneca + tirante + mochila)</p>
                    <p class="text-center">     TRANSPORTE + ALOJAMENTO </p>
                    <p class="text-center">     ARENAS + JOGOS</p>
                    <p class="text-center" style="color: #EE4B4B"> <strong>  DATA LIMITE PARA VENDA do 1°LOTE ATÉ 15/09/2015 </strong></p>
                    <p class="text-center" style="color: #EE4B4B"> <strong>  DATA LIMITE PARA VENDA do 2°LOTE ATÉ 08/10/2015 </strong></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid Section -->
    <section style="background-color: #eb5534;" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Mural</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="<?php echo $this->config->item('base_url') ?>/css-sistema/img/portfolio/IMG-20150709-WA0000.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                       <img src="<?php echo $this->config->item('base_url') ?>/css-sistema/img/portfolio/IMG-20150709-WA0001.jpg" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-6">
                        <h3>Contato</h3>
                        <p>Rafael Taques: 9913-0063<br>Carol Dávalos: 9295-3518</p>
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
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
	<!---- Modal Login -->
	<div class="modal fade" id="myModal" role="dialog" aria-labelledby="mySmallModalLabel">
  		<div class="modal-dialog">
   	 		<div class="modal-content">
      			<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title"> Cadastro </h4>
			      </div>
			      <div class="modal-body">
			        <p>Você Possui Cadastro?</p>
			      </div>
			      <div class="modal-footer">
			        <a type="button" class="btn btn-default" href="<?php echo site_url("cadastro"); ?>">Não</a>
			        <a type="button" class="btn btn-primary" href="<?php echo site_url("login"); ?>">Sim</a>
			      </div>
    		</div>
  		</div>
	</div>
    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            
                            <img src="<?php echo $this->config->item('base_url') ?>/css-sistema/img/portfolio/IMG-20150709-WA0000.jpg" class="img-responsive img-centered" alt="">
                            
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            
                            <img src="<?php echo $this->config->item('base_url') ?>/css-sistema/img/portfolio/IMG-20150709-WA0001.jpg" class="img-responsive img-centered" alt="">
                            
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
