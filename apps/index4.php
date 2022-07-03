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
<a href="https://px.a8.net/svt/ejp?a8mat=3BJVEI+1RPHLE+SXO+5YZ75" rel="nofollow">
<img border="0" width="120" height="60" alt="" src="https://www25.a8.net/svt/bgt?aid=200801466107&wid=005&eno=01&mid=s00000003750001003000&mc=1"></a>
<img border="0" width="1" height="1" src="https://www13.a8.net/0.gif?a8mat=3BJVEI+1RPHLE+SXO+5YZ75" alt="">
		<h1>MetaSystem</h1>
		<a href="https://jflabo.sakura.ne.jp/meta/jquery.mobile-1.4.5/demos/" class="ui-btn" data-ajax="false">戻る</a>

<?php
//$json = file_get_contents(__DIR__ . '/actlog.dat');
//$array = json_decode( $json , true ) ;

?>
<PRE>
	<?php
	//var_dump($array);
		$f = fopen(__DIR__ . '/actlog.dat', "r");
	
	// #2 テーブルのHTMLを生成
	echo "<table>
			<tr>
				<th>TimeStamp</th>
				<th>名前</th>
				<th>メモ</th>
			</tr>";
	
	// #3 csvのデータを配列に変換し、HTMLに埋め込んでいる
	while($line = fgetcsv($f)) {
		echo "<tr>";
		for ($i=0;$i<count($line);$i++) {
			$l2[$i]= "<td><font size='-2'>" . $line[$i] . "</font></td>";
		}
		array_reverse($l2,true);
		for($u=0;$u<count($l2);$u++){
			echo $l2[$u];
		}
		echo "</tr>";
	}
	echo "</table>";
	
	// #4 ファイルを閉じる
	fclose($f);
	 ?>
</PRE>
		<a href="indexbk2.html" class="ui-btn" data-ajax="false">戻る</a>
		</div><!-- /panel -->


	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>jQuery Mobile Demos version <span class="jqm-version"></span></p>
		<p>Copyright 2014 The jQuery Foundation</p>
	</div><!-- /footer -->

</div><!-- /page -->

</body>
</html>
