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
	<script src="js/scripts.js"></script>
  <script src="js/bootstrap.min.js"></script>
    
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
      <a class="" href="#">
            <img class="img-responsive logo" src="images/logo.png" alt="try">
            </a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index">Esileht</a></li>
				<li class="dropdown active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Koolitus <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="beginaccounting">Raamatupidamine algajatele</a></li>
						<li><a href="lift1">Tõstukijuhtide kursus praktilise kogemusega tõstukijuhile </a></li>
						<li><a href="lift2">Tõstukijuhtide kursus </a></li>
						<li><a href="rigger">Töötaja täiendusõpe troppijaks </a></li>
						<li><a href="financial">Väikeettevõtete finantsprogramm</a></li>
						<li>
						<a class="trigger right-caret">Psühholoogia</a>
						<ul class="dropdown-menu sub-menu">
							<li><a href="psychology1">Suhtlemispsühholoogia</a></li>
							<li><a href="psychology2">Müügipsühholoogia</a></li>
							<li><a href="psychology3">Kaubanduspsühholoogia</a></li>
						</ul>
					</li>
						<li class="divider"></li>
						<li class="dropdown-header">Registreerimine</li>
						<li><a href="registration">Registreeri kohe</a></li>
					</ul>
				</li>
        <li ><a href="accounting">Raamatupidamisteenus</a></li>
        <li><a href="transport">Transporditeenus</a></li>
        <li><a href="contact">Kontakt</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<?php include 'carousel.php';?>

<div class="container">
  <div class="text-center">
    <h1 class="headline">Töötaja täiendusõpe troppijaks</h1>
		<p class="pagetext"> <b>Maht:</b> 8 akadeemilist tundi </p>
  </div>
  	<hr>
	<div>
		
		<h3>KURSUSE INFO:</h3>
		<p class="pagetext"> <b>KURSUSE TOIMUMISE KOHT:</b> Tartus, Riia 185 (Tartu Teaduspargi maja), II korrus (215)<br>
			<b>KURSUSE TOIMUMISE AEG:</b> kokkuleppel<br>
			<b>KURSUSE HIND:</b> 65 eurot, hinnale lisandub käibemaks 20%<br>
			<b>KURSUSE LEKTOR:</b>
		</p>
		
		<h3>KURSUSE SISU:</h3>
		<p >
			<ul class="pagetext">
				<li>Kraanade tüübid ja kasutusnõuded.</li>
				<li> Lastide haarade abivahendid.</li>
				<li>Tõstetööde teostamine kraanade abil.</li>
				<li>Ohutusmeetmed. Töö- ja tööohutuse õigusaktid.</li>
        <li> Troppija töökoha korraldamine.</li
			</ul>
		</p>
		</div>
  <p class="pagetext"><b>Väljastatav dokument:</b> Troppija tunnistus</p> 
  
<!--    Siia lehe sisu-->
<br>
</div><!-- /.container -->

<?php include 'footer.html';?>

</body>
</html>