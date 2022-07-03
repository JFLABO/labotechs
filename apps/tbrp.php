<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JFLABO</title>
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

		<h1>たびれぽSystem</h1>
		<center><img src="../../../imgbox/INSPIRE.png" style="max-width:320px;"></center>
    <form method="GET" action="tbrp01.php">
      <!--（2）ラベルとフォーム要素をグループ化-->
      <div class="ui-field-contain">
        <label for="entry_comment">メールアドレスを入力してください：</label>
        <input id="email" name="email" type="text" vleue="<?php
session_start();
date_default_timezone_set('Asia/Tokyo');
$current_date = date("Y-m-d H:i:s");
ini_set('display_errors', 1);
$memo="最初の画面にアクセスが有りました。";
echo $_SESSION['email'];
$a = fopen("tbrpactlog.dat", "a");
@fwrite($a, '"'.$current_date.'","'.$email.'",'.'"'.$memo.'"'."\n");
fclose($a);

//file_put_contents("sample.txt", '".$current_date."'."HELLO WORLD2", FILE_APPEND);
?>"/>
      </div>
      <fieldset class="ui-grid-a">
        <div class="ui-block-a"> </div>
        <div class="ui-block-b"><input type="submit" value="送信" /></div>
      </fieldset>
    </form>
		<img src="_assets/img/devices.png" style="max-width:100px;">
		</div><!-- /panel -->


	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>Massive version <span class="jqm-version"></span></p>
		<p>Copyright 2022 Metatron Foundation</p>
	</div><!-- /footer -->

</div><!-- /page -->

</body>
</html>
