<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- META DEFAULT -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="robots" content="index, follow" />    
	<meta name="author" content="Hugo Moura" />
	
	<!-- META CLIENT -->
    <meta name="description" content="Lucas Bitencourt Records" />
	<meta name="keywords" content="Designer, site, website, meu site, novo site, como criar um site, responsivo, desenvolvimento, desenvolvimento de sites, aplicativos, android, iOS, iPhone, apple">
	
	<!-- CLIENT TITLE -->
    <title>Lucas Bitencourt Records</title>

    <!-- DEFAULT FAVICONS -->
    <?php $icon = file_get_contents('http://cdn.isaquecosta.com.br/pages/defaults/favicon.php'); ?>
	
    <link rel="shortcut icon" href="<?=$icon;?>">
    <link rel="apple-touch-icon" href="<?=$icon;?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=$icon;?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=$icon;?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=$icon;?>">
    
    <!-- ADDING SLIM SCROLL -->
    <?=file_get_contents('http://cdn.isaquecosta.com.br/pages/defaults/slimScroll.php');?>

	<!-- END OF DEFAULT CONFIGS -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

	<!-- Stylesheet
	  ================================================== -->
	<link rel="stylesheet" type="text/css"  href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
  ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><img src="./_img/logo_nova.png"></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">O Estúdio</a></li>
        <li><a href="#services" class="page-scroll">Trabalho</a></li>
        <li><a href="#portfolio" class="page-scroll">Projetos</a></li>
        <li><a href="#team" class="page-scroll">Time</a></li>
        <li><a href="#contact" class="page-scroll">Contato</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Lucas Bitencourt Records</h1>
            <p>Ouça o lado bom da vida.</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Saiba Mais</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Nossa História</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6 text-center"> <img style=" margin-top: 20px; border-radius:0px; box-shadow:none;" src="_img/bateria.jpg" class="img-responsive"> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h3>Sobre o Estúdio</h3>
          <p>Ha mais de 12 anos no mercado, a Lucas Bitencourt Records segue no mercado se destacando na qualidade e compromisso para com o Artista. Nossa Equipe é formada por Músicos, Compositores, Arranjadores, Diretor de Vídeo e Acessoria de Marketing. Profissionais extremamente competentes que realizam o seu projeto com empenho, dedicação e profissionalismo.</p>
		
          <h3>Como Trabalhamos</h3>
          <p>Cada faixa de áudio que sai do Estúdio Lucas Bitencourt Records une o profissionalismo técnico e musical ao talento de seus produtores e músicos que emprestam ao seu projeto seus dons, sempre com o prazer e alegria.

		Estúdio Lucas Bitencourt Records sempre optou por trabalhar com equipamentos que privilegiassem a qualidade na extração do áudio de instrumentos musicais e a pureza vocal em suas produções. A Lucas Bitencourt Records possui periféricos analógicos, digitais e processadores de áudio que auxiliam na qualidade do produto final.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Services Section -->

<div id="services">

  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title text-center">
      <h2>Nossos Serviços</h2>
      <hr>
      <p>Saiba o que podemos lhe oferecer.</p>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 service"> <img src="_img/teste1.png" class="img-responsive">
        <h3>Masterização e Mixagem</h3>
        <p>A masterização é um tratamento final, e deve ser realizada por pessoas com a audição extremamente treinada e desenvolvida. A mixagem garante o equilíbrio do volume, equalização, posição no espectro, entre outros, e é uma das etapas mais importantes no processo que antecede a pós produção, que é onde a música passará pela masterização.</p>
      </div>
      <div class="col-xs-12 col-sm-4 service"> <img src="_img/instrumentos.jpg" class="img-responsive">
        <h3>Instrumentos de qualidade</h3>
        <p>Use nosso espaço e instrumentos de qualidade, traga sua banda e grave o que vocês tem de melhor.</p>
      </div>
      <div class="col-xs-12 col-sm-4 service"> <img src="_img/bateria.jpg" class="img-responsive">
        <h3>Produção Musical</h3>
        <p>A produção musical vai muito alem de tocar os instrumentos, somos preparados para deixar sua musica em sincronia ao bpm ideal.</p>
      </div>
    </div>
  </div>
</div>

<!-- Portfolio Section -->

<div  id="portfolio">
  <div class="container">
  <h2 class="text-center">Projetos</h2>
      <hr>
  <!-- colocar imagens do mesmo tamanho -->
  <div class="bg-projeto">
  <div class="col-md-6 col-sm-12 col-lg-6">
    <div class="section-title text-center center">
	  <h4>LO-FI</h4>
      <p>O projeto "A Morning After" é uma serie de músicas no estilo LO-FI que são musicas terapeuticas de relaxamento profundo, então pegue seus fones se acomode e esqueça seus problemas.</p>
    </div>
    <div>
      <div class="portfolio-item">
        <div>
          <div class="portfolio">
            <div class="hover-bg"> <a href="https://www.youtube.com/watch?v=B2ke2O6I53M&list=PLmtV2e2zGmmQdVQpZnQ05VXb7c2Oy8Wcz" target="_blank">
              <div class="hover-text">
                <h4>Ouvir A Morning After</h4>
              </div>
              <img src="_img/cover.jpg" class="img-responsive"> </a> </div>
          </div>
        </div>
	</div>
  </div>
  </div>
  </div>

  
  
  <div class="bg-projeto">
   <div class="col-md-6 col-sm-12 col-lg-6">
    <div class="section-title text-center center">
      <h4>Lusco Fusco</h4>
      <p>Augusto Diniz lança seu primeiro single autoral "Lusco Fusco" em formato de lyric video, a canção fala sobre aquele momento incerto do dia, que não se sabe se ainda é dia, ou já é noite.</p>
    </div>
    <div>
      <div class="portfolio-item">
        <div>
          <div class="portfolio">
            <div class="hover-bg"> <a href="https://www.youtube.com/watch?v=qL6C1qaqrMU&list=PLmtV2e2zGmmTdlJh2yfClKcCm6ookSqXU" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Ouvir LUSCO FUSCO</h4>
              </div>
              <img src="_img/lusco_fusco.jpg" class="img-responsive"> </a> </div>
          </div>
        </div>
	</div>
  </div>
  </div>
  </div>
  
  
  <div class="bg-projeto">
   <div class="col-md-6 col-sm-12 col-lg-6">
    <div class="section-title text-center center">
      <h4>Dias Frios - Noites Quentes</h4>
      <p>O EP tem 6 músicas e fala sobre o ciclo da vida amorosa, com duas partes (Dias Frios) que é sobre perdas e despedidas e (Noites Quentes) que é sobre paixão e romance.

		A data de lançamento?
		10 de Agosto pela Lucas Bitencourt Records.</p>
    </div>
    <div>
      <div class="portfolio-item">
        <div>
          <div class="portfolio">
            <div  class="hover-bg"> <a href="https://www.youtube.com/watch?v=sMxuoEH3jf4" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Em Breve</h4>
              </div>
              <img src="_img/dias_frios1.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
	</div>
  </div>
  </div>
  </div>
  
  
  <div class="bg-projeto">
   <div class="col-md-6 col-sm-12 col-lg-6">
    <div class="section-title text-center center">
      <h4>Covers</h4>
      <p>Augusto Diniz & Mabel, O Cacto estarão destruindo desafios, o dessa foi: "Gravar um video de mim cantando (isso é um tremendo desafio pra mim)<br> conseguir trazer o lipe ao estúdio para um cover.</p>
    </div>
    <div>
      <div class="portfolio-item">
        <div>
          <div class="portfolio">
            <div class="hover-bg"> <a href="https://www.youtube.com/watch?v=4MLy6Mq7TOw" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Ouvir Covers</h4>
              </div>
              <img src="_img/cover.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
	</div>
  </div>
</div>
</div>
</div>
</div>

<!-- Team Section -->
<div id="team" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 section-title">
        <h2>Time</h2>
        <hr>
        <p>Somos movidos a desafios</p>
      </div>
      <div id="row">
        <div class="col-md-3 col-sm-6 col-lg-6 team">
          <div class="thumbnail"> <img src="_img/augusto.jpg" alt="..." class="img-circle team-img">
            <div class="caption">
              <h3>Augusto Diniz</h3>
              <p>Musico e Produtor</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-lg-6 team">
          <div class="thumbnail"> <img src="_img/cacto1.jpg" alt="..." class="img-circle team-img">
            <div class="caption">
              <h3>Mabel</h3>
              <p>Avaliador tecnico de qualidade</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="section-title text-center">
      <h2>Contato</h2>
      <hr>
      <p>Marque um café com a gente</p>
    </div>
    <div class="row">	  
	  <div class="col-md-6 col-sm-6 col-lg-6">
      <div class="contact-item text-center"> <span>Email</span>
        <p>lucasbrecords@gmail.com</p>
      </div>
	  </div>
	  
	  <div class="col-md-6 col-sm-6 col-lg-6">
      <div class="contact-item text-center"> <span>Telefone</span>
        <p> (31) 99238-9811</p>
      </div>
	  </div>
	  
    </div>
  </div>
</div>

<div id="footer">
  <div class="container text-center">
    <div class="social">
      <ul>
        <li><a href="https://www.facebook.com/lucasbrecords/" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/AugustocomK" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCwXOOUp7I6td6yUP-Ryy5eA" target="_blank"><i class="fa fa-youtube"></i></a></li>
      </ul>
    </div>
    <div>
      <p>Desenvolvido por <a href="http://www.isaquecosta.com.br" rel="follow">Hugo Moura</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
