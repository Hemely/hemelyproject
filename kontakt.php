<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Hemely Practika</title>
  <meta name="description" content="Hemely Practika">
  <meta name="author" content="Hemely Practika">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
	<link rel="shortcut icon" href="images/favicon.ico">
  <script src="js/jquery-2.1.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>


  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
	
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
    <img class="img-responsive logo" src="images/logo2.png" alt="try">
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="esileht">Esileht</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Koolitus <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="koolitus/raamatupidamine-algajatele">Raamatupidamine algajatele</a</li>
						<li><a href="koolitus/tostukijuht-kogemusega">Tõstukijuhtide kursus praktilise kogemusega tõstukijuhile </a></li>
						<li><a href="koolitus/tostukijuht">Tõstukijuhtide kursus </a></li>
						<li><a href="koolitus/troppija">Töötaja täiendusõpe troppijaks </a></li>
						<li><a href="koolitus/finantsprogramm">Väikeettevõtete finantsprogramm</a></li>
					<li>
						<a class="trigger right-caret">Psühholoogia</a>
						<ul class="dropdown-menu sub-menu">
							<li><a href="koolitus/psuhholoogia/suhtlemine">Suhtlemispsühholoogia</a></li>
							<li><a href="koolitus/psuhholoogia/muuk">Müügipsühholoogia</a></li>
							<li><a href="koolitus/psuhholoogia/kaubandus">Kaubanduspsühholoogia</a></li>
						</ul>
					</li>
						<li class="divider"></li>
						<li class="dropdown-header">Registreerimine</li>
						<li><a href="koolitus/registreeri">Registreeri kohe</a></li>
				</ul>
			</li>
			<li><a href="raamatupidamine">Raamatupidamisteenus</a></li>
			<li><a href="transport">Transporditeenus</a></li>
			<li class="active"><a href="kontakt">Kontakt</a></li>
		</ul>
	</div><!--/.nav-collapse -->
</div>
</div>

<?php include 'carousel.php';?>

<div class="container">
  <div class="text-center">
    <h1 class="headline">Kontakt</h1>
  </div>
  <hr>
  <!-- Kaart -->
  <div class="row-fluid" >
		<div class="overlay" onClick="style.pointerEvents='none'"></div>
    <iframe width="75%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2093.18796696149!2d26.677046999999998!3d58.3565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eb376dc41fe8d9%3A0x83cd4ebe3b525bd4!2sHemely+Practika+O%C3%9C!5e0!3m2!1set!2see!4v1433080383925"></iframe>
		<div class="span4" style="float: right;">
				<h2>Hemely Practika OÜ</h2>
				<address>
						<strong>Aadress: </strong>
						Riia 185, 50104 Tartu<br>
						<strong>Telefon: </strong>
						522 3263<br>
						<strong>E-mail: </strong>
						<a href="mailto:hemelypractika@hot.ee">hemelypractika@hot.ee</a><br>
				</address>
		</div>
  </div>
	
<br>
</div><!-- /.container -->
	
<?php include 'footer.html';?>
    
</body>
</html>