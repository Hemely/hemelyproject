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
        <li><a href="contact.html">Kontakt</a></li>
          <li><a href="#" onclick="testfun('1')">test</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Username</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<!--<div class="wide desktop-only">-->
  	<!--<div class="col-xs-5 line"><hr></div>
    <div class="col-xs-2 logo">Logo</div>
    <div class="col-xs-5 line"><hr></div>-->
<!--</div>-->
  
<div id="myCarousel" class="carousel slide desktop-only" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    
    <div class="item active wide">
    </div>
    
    <div class="item wide">
    </div>

    <div class="item wide">
    </div>

    <div class="item wide">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>

<div class="container" id="changeableContainer">
  <div class="text-center">
    <h1>Sisu</h1>
  </div>
  
    
  <?php 
    require ('data/myconnection.php');  
    $result = mysql_query("SELECT content FROM texts WHERE ID='2'");
    while ($row = mysql_fetch_array($result)) {
       echo "Content: ".$row{'content'}."<br>"."<p>".$row{'content'}."</p>";
    }
    require ('data/closemyconnection.php');  
  ?>
  
</div><!-- /.container -->

<?php include 'footer.html';?>

</body>
</html>