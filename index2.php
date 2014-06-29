<?php require_once('Connections/config.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_config, $config);
$query_rsOne = "SELECT * FROM content WHERE type = 2 ORDER BY rand() limit 0,1";
$rsOne = mysql_query($query_rsOne, $config) or die(mysql_error());
$row_rsOne = mysql_fetch_assoc($rsOne);
$totalRows_rsOne = mysql_num_rows($rsOne);

mysql_select_db($database_config, $config);
$query_rsHeadline = "SELECT * FROM content WHERE type = 16 ORDER BY RAND() Limit 0,1;";
$rsHeadline = mysql_query($query_rsHeadline, $config) or die(mysql_error());
$row_rsHeadline = mysql_fetch_assoc($rsHeadline);
$totalRows_rsHeadline = mysql_num_rows($rsHeadline);

mysql_select_db($database_config, $config);
$query_rsQuote = "SELECT * FROM content WHERE type = 1";
$rsQuote = mysql_query($query_rsQuote, $config) or die(mysql_error());
$row_rsQuote = mysql_fetch_assoc($rsQuote);
$totalRows_rsQuote = mysql_num_rows($rsQuote);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Themes made from your Image.</title>
<link rel="stylesheet" href="css2/bootstrap.min.css">
<link rel="stylesheet" href="css3/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<style type="text/css">
	.bs-example{
    	margin: 20px;
    }
    

  .my-container [class^="col-"] {
    padding-top: 10px;
    padding-bottom: 10px;
    background-color: #fff;
    border: 1px solid #ddd;
    background-color: #fff;
    border: 1px solid #fff;
      
</style>
</head>
<body>
<div class="bs-example">
    <nav id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://fiverr.com/ant0r10n"> <i class="glyphicon glyphicon-leaf"></i>Ant0r10n</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-info-sign"></i> About</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> Contact</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Themes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class"active"><a href="index2.php">Hummingbird</a></li>
                            <li><a href="index3.php">Peacock</a></li>
                            <li><a href="index4.php">Lizzard</a></li>
                            
                           <li><a href="index5.php">White Peacock</a></li>
                        </ul>
                    </li>
                </ul>
              <!--  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admin <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </li>
                </ul>-->
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
    
    <!--END NAV START CONTENT-->
     <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <img src="img/hummingbird-green-gold.jpg" class="img-responsive img-rounded">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="alert alert-dismissable alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
          <strong>Well done!</strong> You found my Themes by Image page.</div>
      </div>
      <div class="col-md-6">
        <h2>This theme is styled from the colors in the image above. The basic elements are labled to give you a good idea what your site might look like with a color corordinatd theme.<br><a href="http://fiverr.com/ant0r10n" title="ant0r10n Fivver page">Get your Bootstrap 3 Image matched color theme now.</a>
      </div>
    </div>
  </div>
  <div class="container">

  </div>
  <div class="container">

  </div>
  <div class="container my-container">
    <div class="row">
    
    </div>
    <div class="row">
      <div class="col-md-6">
         <form role="form" action="mailto:skull.luck@gmail.com">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="Email1" placeholder="Enter email" type="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Message</label>
            <input class="form-control" id="message" placeholder="Your Message" type="text">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
      <div class="col-md-6">
        <ul class="media-list">
          <li class="media">
            <a class="pull-left" href="#">
              <img class="media-object img-rounded" src="img/me-mosaic.jpg" height="75" width="75">
            </a>
            <div class="media-body">
              <h4 class="media-heading"><?php echo $row_rsHeadline['thecontent']; ?></h4>
              <p><?php echo $row_rsOne['thecontent']; ?></p>
            </div>
          </li>
          <li class="media">
            <a class="pull-left" href="#">
              <img class="media-object img-rounded" src="img/hummingbird-green-gold-swatch.jpg" height="75" width="75">
            </a>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      
    </div>
    <div class="row">
      <div class="col-md-6"></div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="well">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
        </div>
        <blockquote>
          <p><?php echo $row_rsQuote['thecontent']; ?></p>
        </blockquote>
      </div>
      <div class="col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
          </div>
          <div class="panel-body">
            <h1>Heading</h1>
            <p>Panel content</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-default navbar-fixed-bottom navbar-inverse">
    <style>
      .body{padding-top:70px}
    </style>
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://fiverr.com/ant0r10n"><i class="glyphicon glyphicon-leaf"></i>Ant0r10n</a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <p class="navbar-text navbar-right">images used under license</p>
      </div>
    </div>
  </div>
  <div class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          <p>One fine body...</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <ul class="pagination">
          
          <li>
            <a href="index.php">Default</a>
          </li>
          <li class="active">
            <a href="index2.php">Hummingbird</a>
          </li>
          <li>
            <a href="index3.php">Peacock</a>
          </li>
          <li>
            <a href="index4.php">Lizzard</a>
          </li>
          <li>
            <a href="index5.php">Albino Peacock</a>
          </li>
          
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <hr>
      </div>
    </div>
  </div>




</body>
</html>
<?php
mysql_free_result($rsOne);

mysql_free_result($rsHeadline);

mysql_free_result($rsQuote);
?>
