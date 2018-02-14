<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="omot">
<img src="img/pocetna_1.gif">
<form action="#" method="GET">
           <a href="insert.php"><img src="img/slika3.png"  title="Dodaj"></a>
           <a href="remove.php"><img src="img/slika4.png"  title="Obriši"></a><br><br>
<input type="text" name="select" placeholder="Traži radnika...">
<input type="submit" value="Search"><br>
</form>
</div><br>
<div id="obavjestenje">
<?php

include 'inc/getResults.php'

?>
</div>


</body>
</html>