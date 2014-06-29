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
$query_rsOne = "SELECT * FROM content ORDER BY rand() limit 0,1";
$rsOne = mysql_query($query_rsOne, $config) or die(mysql_error());
$row_rsOne = mysql_fetch_assoc($rsOne);
$totalRows_rsOne = mysql_num_rows($rsOne);

mysql_select_db($database_config, $config);
$query_Recordset1 = "SELECT * FROM content WHERE type = 1 ORDER BY RAND() Limit 0,1;";
$Recordset1 = mysql_query($query_Recordset1, $config) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_config, $config);
$query_rsParagraph = "SELECT * FROM content WHERE type = 2 ORDER BY RAND() Limit 0,1";
$rsParagraph = mysql_query($query_rsParagraph, $config) or die(mysql_error());
$row_rsParagraph = mysql_fetch_assoc($rsParagraph);
$totalRows_rsParagraph = mysql_num_rows($rsParagraph);

$query_rsOne = "SELECT * FROM content  ORDER BY rand() limit 0,1";
$rsOne = mysql_query($query_rsOne, $config) or die(mysql_error());
$row_rsOne = mysql_fetch_assoc($rsOne);
$totalRows_rsOne = mysql_num_rows($rsOne);
$query_rsOne = "SELECT * FROM content ORDER BY rand() limit 0,1";
$rsOne = mysql_query($query_rsOne, $config) or die(mysql_error());
$row_rsOne = mysql_fetch_assoc($rsOne);
$totalRows_rsOne = mysql_num_rows($rsOne);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Themes made from your Image.</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css3/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
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
      
.mybutton {
}
.mynewbut {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 18px;
	margin: 5px;
	padding: 10px;
	height: 40px;
	width: 200px;
}
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
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
                            <li><a href="index2.php">Theme 2</a></li>
                            <li><a href="index3.html">Theme 3</a></li>
                            <li><a href="index4.html">Theme 4</a></li>
                            <li class="divider"></li>
                            <li><a href="index5.html">Theme 5</a></li>
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
        <img src="img/yellow_flower__with_little_spider__3___by_arlen_mctaranis-d624j5j.jpg" class="img-responsive img-rounded">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="alert alert-dismissable alert-success">
               <a href="#" class="close" data-dismiss="alert">&times;</a>
          <strong>Well done!!</strong> You found my Themes by Image page.</div>
          
      </div>
      <div class="col-md-6">
        <h2>This is the default Bootstrap theme.</h2> It looks great, but sometimes you need a little customization. Use the tabs in the nav bar up top to see  how it looks when it is based on the colors of your image. The basic elements are labled to give you a good idea what your site might look like with a color corordinatd theme.<br><a href="http://fiverr.com/ant0r10n" title="ant0r10n Fivver page">Get your Bootstrap 3 Image matched color theme now.</a>
      </div>
    </div>
  </div>
  <div class="container">

  </div>
  
  <div class="container my-container">
    <div class="row">
      
    </div>
    <div class="row">
      <div class="col-md-6">
         <form action="logedin.php" method="get">
		   <span id="sprytextfield1">
		   <label for="username"></label>
		   <input class="form-control" type="text" name="username" id="username">
		   <span class="textfieldRequiredMsg">A value is required.</span></span><br>
		   <span id="sprypassword1">
		   <label for="password"></label>
		   <input class="form-control" type="password" name="password" id="password">
		   <span class="passwordRequiredMsg">A value is required.</span></span><br>
		   <input class="btn btn-default" name="login" type="submit" value="log in">
         </form>
      </div>
      <div class="col-md-6">
        <ul class="media-list">
          <li class="media">
            <a class="pull-left" href="#">
              <img class="media-object img-rounded" src="img/me-mosaic.jpg" height="75" width="75">
            </a>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
            </div>
          </li>
          <li class="media">
            <a class="pull-left" href="#">
              <img class="media-object img-rounded" src="img/yellow_flower__with_little_spider__3___by_arlen_mctaranis-d624j5j.jpg" height="75" width="75">
            </a>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              <p><?php echo $row_rsParagraph['thecontent']; ?></p>
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
          <p>Some thing interesting</p>
        </div>
        <blockquote>
          <p><?php echo $row_Recordset1['thecontent']; ?></p>
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
            <p></p>
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
          
          <li class="active">
            <a href="#">1</a>
          </li>
          <li>
            <a href="index2.php">2</a>
          </li>
          <li>
            <a href="index3.html">3</a>
          </li>
          <li>
            <a href="index4.html">4</a>
          </li>
          <li>
            <a href="index5.html">5</a>
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
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {hint:"username"});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>
<?php
mysql_free_result($rsOne);

mysql_free_result($Recordset1);

mysql_free_result($rsParagraph);
?>
