<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Hemely Practika</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
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
      <a class="navbar-brand">Hemely Practika</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Esileht</a></li>
				<li class="dropdown active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Koolitus <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="beginaccounting.php">Raamatupidamine algajatele</a></li>
						<li><a href="lift1.php">Tõstukijuhtide kursus praktilise kogemusega tõstukijuhile </a></li>
						<li><a href="lift2.php">Tõstukijuhtide kursus </a></li>
						<li><a href="rigger.php">Töötaja täiendusõpe troppijaks </a></li>
						<li><a href="financial.php">Väikeettevõtete finantsprogramm</a></li>
						<li>
						<a class="trigger right-caret">Psühholoogia</a>
						<ul class="dropdown-menu sub-menu">
							<li><a href="psychology1.php">Suhtlemispsühholoogia</a></li>
							<li><a href="psychology2.php">Müügipsühholoogia</a></li>
							<li><a href="psychology3.php">Kaubanduspsühholoogia</a></li>
						</ul>
					</li>
						<li class="divider"></li>
						<li class="dropdown-header">Registreerimine</li>
						<li><a href="registration.php">Registreeri kohe</a></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
        <li ><a href="accounting.php">Raamatupidamisteenus</a></li>
        <li><a href="transport.php">Transporditeenus</a></li>
        <li><a href="contact.php">Kontakt</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<?php include 'carousel.php';?>

<div class="container">
  <div class="text-center">
    <h1 class="headline">Väikeettevõtete finantsprogramm</h1>
		<p class="pagetext"> <b>Maht:</b> 60 akadeemilist tundi </p>
  </div>
  	
	<div>
		
		<h3>KURSUSE INFO:</h3>
		<p class="pagetext"> <b>KURSUSE TOIMUMISE KOHT:</b> Tartus, Riia 185 (Tartu Teaduspargi maja), II korrus (215)<br>
			<b>KURSUSE TOIMUMISE AEG:</b> kokkuleppel
			<b>KORRALDUS</b> teisipäev, neljapäev kell 9.00 – 15.30<br>
			<b>KURSUSE HIND:</b> 790 eurot, hinnale lisandub käibemaks 20%<br>
			<b>LEKTOR:</b> Heli Halling-Meitern - Raamatupidamise lektor aastast 1995. Töötanud pearaamatupidajana 11 aastat. Osutab väikeettevõtjatele raamatupidamisteenust.<br>
			<b>SIHTRÜHM:</b> Väikeettevõtte juhid , juhatuse liikmed, raamatupidamisharidusega inimesed, kes peale pausi soovivad uuesti alustada tööd raamatupidajana, jt töötajad, kes vajavad oma töös finantsalaseid teadmisi ja oskusi.<br>
			<b>EESMÄRK:</b> Anda osavõtjatele teadmisi ja oskusi selleks, et vajalikud teooriad rakendada praktikasse.<br>
		</p>
		<p >
			<ul class="pagetext">
				<li>kõigile õppijatele komplekteeritakse individuaalsed õppemapid</li>
				<li>loengud</li>
				<li>näidisülesannete lahendamine</li>
				<li>koolituse läbinutele väljastatakse vastav tunnistus</li>
			</ul>
		</p>
		<h3>KURSUSE SISU</h3>
		<ul class="pagetext">
			<li>Majandusarvestuse ja finantsjuhtimise olemus</li>
			<li>Põhilised finantsmõisted ja –aruanded ning nende seos</li>
			<li>Bilanss, kasumiaruanne, rahavoogude aruanne</li>
			<li>Põhivara arvestus</li>
			<li>Tulude arvestus</li>
			<li>Kulude arvestus</li>
			<li>Töötasu, puhkuse arvestamise kord, haigushüvitised</li>
			<li>Maksud, maksudeklaratsioonid</li>
			<li>Lähetused</li>
			<li>Raamatupidamisaruannete koostamise põhimõtteid </li>
			<li>Raamatupidamisarvestuse korraldamine ettevõttes</li>
			<li>ajandusaasta aruanne</li>
			<li>Dokumendi- ja arhiivitöö ettevõttes</li>
			<li>Praktilised ülesanded ja näited</li>
		</ul>
		
	
	</div>
   
  
<!--    Siia lehe sisu-->
<br>
</div><!-- /.container -->

<?php include 'footer.html';?>

</body>
</html>