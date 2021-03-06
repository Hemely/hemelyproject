<?php 
if(isset($_POST['submit'])){
    $to = "kasutajatestimiseks@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Hemely Practika</title>
  <meta name="description" content="Hemely Practika">
  <meta name="author" content="Hemely Practika">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/custom.css">
	<link rel="shortcut icon" href="../images/favicon.ico">
  <script src="../js/jquery-2.1.3.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
	<script src="../js/scripts.js"></script>
    
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
      <img class="img-responsive logo" src="../images/logo2.png" alt="try">
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="../esileht">Esileht</a></li>
				<li class="dropdown active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Koolitus <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="raamatupidamine-algajatele">Raamatupidamine algajatele</a</li>
						<li><a href="tostukijuht-kogemusega">Tõstukijuhtide kursus praktilise kogemusega tõstukijuhile </a></li>
						<li><a href="tostukijuht">Tõstukijuhtide kursus </a></li>
						<li><a href="troppija">Töötaja täiendusõpe troppijaks </a></li>
						<li><a href="finantsprogramm">Väikeettevõtete finantsprogramm</a></li>
					<li>
						<a class="trigger right-caret">Psühholoogia</a>
						<ul class="dropdown-menu sub-menu">
							<li><a href="psuhholoogia/suhtlemine">Suhtlemispsühholoogia</a></li>
							<li><a href="psuhholoogia/muuk">Müügipsühholoogia</a></li>
							<li><a href="psuhholoogia/kaubandus">Kaubanduspsühholoogia</a></li>
						</ul>
					</li>
						<li class="divider"></li>
						<li class="dropdown-header">Registreerimine</li>
						<li><a href="registreeri">Registreeri kohe</a></li>
					</ul>
				</li>
        <li><a href="../raamatupidamine">Raamatupidamisteenus</a></li>
        <li><a href="../transport">Transporditeenus</a></li>
        <li><a href="../kontakt">Kontakt</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<?php include '../carousel.php';?>

<div class="container">
  <div class="text-center">
    <h1 class="headline">Registreerimine kursusele</h1>
<!--		<p class="pagetext"> Saada kursusele registreerimssoov või küsi lisainfot. <br> Palun saatke registreerimise soov e-maili aadressile helitmk@hot.ee või helistage 522 3263 </p>-->
 	</div>
	
	
	<div class="text-center">
		<div id="error" style="display: none; color: red;"><p class="pagetext">Palun täida kõik lahtrid</p></div>
		<div id="success" style="display: none; color: green;"><p class="pagetext">Kiri edukalt saadetud!</p></div>
	</div>

<br>

<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "kasutajatestimiseks@gmail.com";
  $email = trim($_REQUEST['email']);
  $eesnimi = trim($_REQUEST['eesnimi']);
	$perenimi = trim($_REQUEST['perenimi']);
  $comment = trim($_REQUEST['comment']);
	
	$mail = validate($email);
	$enimi = validate($eesnimi);
	$pnimi = validate($perenimi);
	$sisu = validate($comment);
		
	if($mail && $enimi && $pnimi && $sisu) {
		//send email
		mail($admin_email, "Registreerimissoov: " . $eesnimi . " " . $perenimi, $comment, "From:" . $email);
		
?>
	<script type="text/javascript">
		document.getElementById('error').style.display = 'none';
		document.getElementById('success').style.display = 'block';
	</script>
		
<?php		
	} else {
?>
	<script type="text/javascript">
		document.getElementById('error').style.display = 'block';
	</script>
<?php
	}
		
  }

	function validate($data) {
		if($data) {
			return true; 
		} else {
			return false;
		}
	}
  
?>
	
	<div id="regform" class="formcont">
		<form method="post">
		<label>Teie e-mail:&nbsp;</label><input name="email" type="text" /><br /><br />
		<label>Eesnimi:&nbsp;</label><input name="eesnimi" type="text" /><br /><br />
		<label>Perekonnanimi:&nbsp;</label><input name="perenimi" type="text" /><br /><br />
		<label>Sisu:&nbsp;</label><br />
		<textarea name="comment" rows="10"></textarea><br />
		<input type="submit" value="Saada kiri" />
		</form>
  </div>
	
	
<br>
</div><!-- /.container -->

<?php include '../footer.html';?>

</body>
</html>