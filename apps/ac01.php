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
<div id="page1" data-role="page">
<div data-role="header"><h1>ダイアログのテスト</h1></div>
<div data-role="content">
<img src="../../../imgbox/INSPIRE.png">
<p><a href="#page2" data-rel="dialog">会員登録画面</a></p>

</div>
<div data-role="footer"><h4>© www.tabirepo.online</h4></div>
</div>

<div id="page2" data-role="page">
<div data-role="header"><h1>ダイアログ！</h1></div>
<div data-role="content">
  <p>こんにちは！</p>
  <form>
  <a data-role="button" href="#page1">OK</a>
  <a data-role="button" href="#page3">Cancel</a>
  </form>
</div>
<div data-role="footer"><h4>© www.tabirepo.online</h4></div>
</div>

<div id="page3" data-role="page">
<div data-role="header"><h1>ダイアログ！</h1></div>
<div data-role="content">
<p>キャンセルを押しました</p>
<p><a href="#page1">ページ 1 へ</a></p>
</div>
<div data-role="footer"><h4>© www.tabirepo.online</h4></div>
</div>

</body>
</html>