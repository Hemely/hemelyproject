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
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
    
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>


<div class="navbar navbar-inverse navbar-fixed-top">
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
        <li class="active"><a href="index.php">Esileht</a></li>
        <li>
          <a data-toggle="collapse" href="#nav-collapse1" aria-expanded="false" aria-controls="nav-collapse1">Koolitus</a>
        </li>
        <li><a href="#">Raamatupidamisteenus</a></li>
        <li><a href="#">Transporditeenus</a></li>
        <li><a href="contact.html">Kontakt</a></li>
      </ul>
      <ul class="collapse nav navbar-nav nav-collapse" id="nav-collapse1">
            <li><a href="#">Web design</a></li>
            <li><a href="#">Development</a></li>
            <li><a href="#">Graphic design</a></li>
            <li><a href="#">Print</a></li>
            <li><a href="#">Motion</a></li>
            <li><a href="#">Mobile apps</a></li>
          </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<?php include 'carousel.php';?>


<div class="container" id="changeableContainer">
  <div class="text-center">
    <h1>Hemely Practika</h1>
  </div>
	
    
    
  
</div><!-- /.container -->

<?php include 'footer.html';?>

</body>
</html>