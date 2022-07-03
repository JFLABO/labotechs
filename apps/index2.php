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

		<h1>MetaSystem</h1><?php session_start();$_SESSION['username'] = $_GET["name"];echo $_GET["name"];?>

<div class="ui-grid-c" style="width:480px;">
    <div class="ui-block-a" style="width:170px;"><div class="ui-bar ui-bar-a" style="height:60px"><a href="01.php" class="ui-btn" data-ajax="false">出勤</a></div></div>
    <div class="ui-block-b" style="width:170px;"><div class="ui-bar ui-bar-a" style="height:60px"><a href="02.php" class="ui-btn" data-ajax="false">事務</a></div></div>
</div><!-- /grid-a -->

<div class="ui-grid-b" style="width:480px;">
		<div class="ui-block-a" style="width:170px;"><div class="ui-bar ui-bar-a" style="height:60px"><a href="03.php" class="ui-btn" data-ajax="false">メモ</a></div></div>
    <div class="ui-block-b" style="width:170px;"><div class="ui-bar ui-bar-a" style="height:60px"><a href="04.php" class="ui-btn" data-ajax="false">掃除</a></div></div>
</div><!-- /grid-a -->

<div class="ui-grid-d" style="width:480px;">
		<div class="ui-block-a" style="width:170px;"><div class="ui-bar ui-bar-a" style="height:60px"><a href="05.php" class="ui-btn" data-ajax="false">排泄支援</a></div></div>
    <div class="ui-block-b" style="width:170px;"><div class="ui-bar ui-bar-a" style="height:60px"><a href="06.php" class="ui-btn" data-ajax="false">洗濯</a></div></div>
</div><!-- /grid-a -->

<div class="ui-grid-e" style="width:480px;">
		<div class="ui-block-a" style="width:170px;"><div class="ui-bar ui-bar-a" style="height:60px"><a href="07.php" class="ui-btn" data-ajax="false">退勤</a></div></div>
    <div class="ui-block-b" style="width:170px;"><div class="ui-bar ui-bar-a" style="height:60px"><a href="08.php" class="ui-btn" data-ajax="false">打ち合わせ</a></div></div>
</div><!-- /grid-a -->
<div class="ui-grid-f" style="width:480px;">
		<div class="ui-block-a" style="width:170px;"><div class="ui-bar ui-bar-a" style="height:60px"><a href="index.html" class="ui-btn" data-ajax="false">戻る</a></div></div>
    <div class="ui-block-b" style="width:170px;"><div class="ui-bar ui-bar-a" style="height:60px"><a href="08.php" class="ui-btn" data-ajax="false">お食事</a></div></div>
</div><!-- /grid-a -->



	</div><!-- /panel -->

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>jQuery Mobile Demos version <span class="jqm-version"></span></p>
		<p>Copyright 2014 The jQuery Foundation</p>
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>
