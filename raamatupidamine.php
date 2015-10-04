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
      <img class="img-responsive logo" src="images/logo.png" alt="try">
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
        <li class="active"><a href="raamatupidamine">Raamatupidamisteenus</a></li>
        <li><a href="transport">Transporditeenus</a></li>
        <li><a href="kontakt">Kontakt</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<?php include 'carousel.php';?>

<div class="container">
  <div class="text-center">
    <h1 class="headline">Raamatupidamisteenus</h1>
		<p class="pagetext"> Teenuse sisuks on kliendi raamatupidamise igapäevane korraldamine.</p>
		<p class="pagetext"> Hind kokkuleppel sõltuvalt töö mahust </p>
  </div>
  <hr>
	<div>
		
		<h3>Teenus sisaldab: </h3> 
    <p> <ul class="pagetext">
  <li>kontoplaani väljatöötamist</li>
  <li>algdokumentide vormilise vastavuse kontrolli</li>
  <li>algdokumentide kajasamist erinevates registrites</li>
	<li>käibe-, tulu- ja sotsiaalmaksu arvestust</li>
	<li>palgaarvestust</li>
		<li>laoarvestuse pidamist</li>
		<li>informatsiooni andmist kliendi majandusnäitajate kohta vastavalt kliendi soovile</li>
		<li>aruannete koostamist ja esitamist vastavalt Eesti Vabariigi seadusandluses 
sätestatud korrale ja tähtaegadele</li>
		<li>raamatupidamisalase konsultatsiooni andmist</li>	
</ul> </p>
	<h3>Muud raamatupidamisteenused: </h3> 
	<p > <ul class="pagetext">
  <li>raamatupidamise sise- eeskirjade väljatöötamine</li>
	<li>varasemate perioodide korrastamine</li>
	<li>raamatupidamise taastamine</li>
	<li>kliendi esindamine Maksuametis</li>
	<li>aruannete koostamine ja esitamine  Äriregistrile ja Statistikaametile vastavalt 
Eesti Vabariigi seadusandluses sätestatud korrale ja tähtaegadele.</li>
	</div>
   
  
<!--    Siia lehe sisu-->
<br>
</div><!-- /.container -->

<?php include 'footer.html';?>

</body>
</html>