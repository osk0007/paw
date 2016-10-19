<!DOCTYPE html>
<html dir="ltr" lang="">
<head>
     
    
    <title>PAW</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="7 days">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
</head>
<body>
<form>
<input name="slovo"/>
<input name="pocet"/>
<input type="submit"/>
 <input type="radio" name="seznam" value="cislovane"> Číslované
 <input type="radio" name="seznam" value="odstavce"> Odstavce<br>
 <textarea name="text0">
 Sem piš
 </textarea>
</form>
<?php
	print $_REQUEST["pocet"];
	print $_REQUEST["text0"];
	$pocet_znaku = strlen($_REQUEST["text0"]);
	print "<p>".$pocet_znaku."</p>";
	$pieces = explode(" ",$_REQUEST["text0"]);
	print "<p>".$pieces[0]."</p>"; // piece1
	print "<p>".$pieces[2]."</p>";
	print '<b>' . $searchrow[$_REQUEST["text0"]]. '</b>';
	
	/*if ($_REQUEST["seznam"]==cislovane) {
	for ($i = 1; $i<=$_REQUEST["pocet"]; $i++)  { 
	print "<ol>";
		print  "<li>řádek ".$i." ".$_REQUEST["slovo"]."</li>" ;
		print "</ol>";
	}
	}
	else{for ($i = 1; $i<=$_REQUEST["pocet"]; $i++)  { 
	print "<ul>";
		print  "<li>řádek ".$i." ".$_REQUEST["slovo"]."</li>" ;
		print "</ul>";
	}}*/
	
	?>

</body>
</html>