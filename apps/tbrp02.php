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

<?php
session_start();
date_default_timezone_set('Asia/Tokyo');
$current_date = date("Y-m-d H:i:s");
ini_set('display_errors', 1);
$_SESSION['nick']=$_GET['nick'];;
$email=$_SESSION['email'];
$memo="ニックネームを付けましました。";
$nick=$_SESSION['nick'];
//$email=$_GET['email'];
//$yomi=$_GET['yomi'];
$a = fopen("tbrpactlog.dat", "a");
@fwrite($a, '"'.$current_date.'","'.$email.'",'.'"'.$nick.'",'.'"'.$memo.'"'."\n");
fclose($a);

//file_put_contents("sample.txt", '".$current_date."'."HELLO WORLD2", FILE_APPEND);
?>
<?php
date_default_timezone_set('Asia/Tokyo');
$current_date = date("Y-m-d H:i:s");
ini_set('display_errors', 1);

$memo="ログインしました。";

//$email=$_GET['email'];
//$yomi=$_GET['yomi'];
$a = fopen("tbrpmeibo.dat", "a");
@fwrite($a, '"'.$current_date.'","'.$email.'",'.'"'.$nick.'"'."\n");
fclose($a);

//file_put_contents("sample.txt", '".$current_date."'."HELLO WORLD2", FILE_APPEND);
?>
<?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");
  $to = $_SESSION['email'];
  $title = "ニックネームをつけました。";
  $message = "SYSTEMメール　ようこそいらっしゃいました。".
  "https://jflabo.sakura.ne.jp/meta/jquery.mobile-1.4.5/demos/tbrp03.php"."\n\n".
  "\n悪霊退散　関係者以外閲覧禁止　知財の漏洩を警戒してください\n★☆★☆★☆金運引き寄せ　白蛇パワー　贔屓のパワー★☆★☆★☆\n所在地：東京都江東区亀戸２－１３－１２　たびれぽ福分け取材班\n".
  "知財部連絡先　FAXのみ:03-6730-7898　3日後応答　コンビニに設置したFAX送信機をお使いください\n".
  "http://www.tabirepo.online/metalog/jquery.mobile-1.4.5/demos/index.html\n\n".
  "場所：AOKIが手掛ける快活クラブ　APAホテル\n".
  "https://drive.google.com/file/d/1IAeSbyxqJtIOf0iwwNFhQS7GbJVusp7c/view?usp=sharing\n\n"
  ."https://drive.google.com/file/d/1D1g95eEQ4hr6zstgXhVz1YisYKzFrh-7/view?usp=sharing";
  $headers = "From: from@tabilepo.online";

  if(mb_send_mail($to, $title, $message, headers))
  {
    echo "メール送信成功です";
  }
  else
  {
    echo "メール送信失敗です";
  }
  echo $_SESSION['nick'];
  echo $_SESSION['email'];
 ?>
		<h1>たびれぽSystem</h1>
		<center><img src="../../../imgbox/INSPIRE.png" style="max-width:320px;"></center>
		<a href="http://www.tabirepo.online/jflabo/01kmdata/dbindex.php" class="ui-btn" data-ajax="false">充実亀戸ぐらし</a>


		<img src="_assets/img/devices.png" style="max-width:100px;">
		</div><!-- /panel -->


	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>Massive version <span class="jqm-version"></span></p>
		<p>Copyright 2022 Metatron Foundation</p>
	</div><!-- /footer -->

</div><!-- /page -->

</body>
</html>
