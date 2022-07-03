<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="page" class="jqm-demos jqm-home">

	<div data-role="header" class="jqm-header">
		<h2><img src="_assets/img/jquery-logo.png" alt="jQuery Mobile"></h2>
		<p>Version <span class="jqm-version"></span></p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->

	<div role="main" class="ui-content jqm-content">

		<h1>MetaSystem</h1>
<?php
session_start();
$name=$_SESSION['username'];
date_default_timezone_set('Asia/Tokyo');
$current_date = date("Y-m-d H:i:s");
ini_set('display_errors', 1);
$a = fopen("actlog.dat", "a");
@fwrite($a, '"'.$current_date.'","'.$name.'",'.'"洗濯をはじめました。"'."\n");
fclose($a);

//file_put_contents("sample.txt", '".$current_date."'."HELLO WORLD2", FILE_APPEND);
?>
記録しました。
<a href="index.html" class="ui-btn" data-ajax="false">戻る</a>
	</div><!-- /panel -->


</div><!-- /page -->

</body>
</html>
