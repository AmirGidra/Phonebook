<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="omot">
<img src="img/remove.jpg">
<a href="insert.php"><img src="img/search.jpg" title="Dodaj"></a>
<a href="remove.php"><img src="img/slika4.png" title="Obriši"></a><br><br>
<?php
   require "inc/connection.php";
   $query ="SELECT * FROM radnici";
   $rez =mysqli_query($conn,$query);
   if (mysqli_num_rows($rez) > 0 ) {
      while ($row =mysqli_fetch_assoc($rez)) {?>
<div id="poruka">
   <a href="remove.php?id=<?php echo $row['ID']?>">BRIŠI</a>
   <h4>Ime i Prezime : <?php echo $row['ime']." ".$row['prezime']; ?></h4>
   <h4>Rođen I Mjesto :<?php echo $row['rodjen']." ".$row['mjesto']; ?></h4>
   <h4><?php echo $row['pozicija']?></h4>
</div>
<?php
   if (isset($_GET['id'])) {
      $id= $_GET['id'];
      $query = "DELETE FROM radnici WHERE ID = {$id}";
      mysqli_query($conn,$query);
      header("Location: remove.php");
   }

  }
  }

  ?>

</body>
</html>
