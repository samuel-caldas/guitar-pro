<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>PSP Games</title>
<meta http-equiv="Refresh" content="5">
<style type="text/css">
body,td,th {
	color: #333;
	font-family: Verdana, Geneva, sans-serif;
}
body {
	background-color: #EEE;
}
a:link {
	text-decoration: none;
	color: #333;
}
a:visited {
	text-decoration: none;
	color: #333;
}
a:hover {
	text-decoration: underline;
	color: #333;
}
a:active {
	text-decoration: none;
	color: #333;
}
div {
	display: block;
	clear: both;
	margin: 0px;
	padding: 0px;
}
</style>
</head>

<body>
<h1>Todos as Tablaturas para GuitarPro!</h1>
<?php
	include_once("cpainel/funcoes/funcoes.php");
	include_once("cpainel/funcoes/conectar.php");
	$saida=selecionar("*","tabs","","tab");
	$x=count($saida);
?>
<h3>Tablaturas:</h3>
<ul type="square">
<?php
if ($saida){
	for($i=0; $i<$x; $i++){
		echo("	<li><a href='#'>".$saida[$i][1]."</a></li>");
	}
}
?>
</ul>
</body>
</html>