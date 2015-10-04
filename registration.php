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
    <h1 class="headline">Registreerimine kursusele</h1>
		<p class="pagetext"> Saada kursusele registreerimssoov või küsi lisainfot. </p>
 	</div>
	<div class="container">
<!--
  <form role="form">
    <div class="form-group">
      <label for="name">Sisesta nimi:</label>
      <input type="text" class="form-control" id="name">
    </div>
    <div class="form-group">
      <label for="email">Sisesta e-mail:</label>
      <input type="text" class="form-control" id="email">
    </div>
		<div class="form-group">
			<label for="content">Kursusele registreerimise soov või küsi lisainfot:</label>
			<textarea class="form-control" rows="5" id="content"></textarea>
		</div>
  </form>
-->
	</div>
	
	
<br>
<br>
	
<!--
<form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>
-->
	
<!--    Siia lehe sisu-->
<br>
</div><!-- /.container -->

<?php include 'footer.html';?>

</body>
</html>