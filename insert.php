<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="omot">


  <img src="img/add.jpg">
  <a href="index.php"><img src="img/search.jpg" title="Search"></a>
  <a href="remove.php"><img src="img/slika4.png" title="Obriši"></a><br><br>
  <form action="#" method="POST">
  <label>Ime:<br>
       <input type="text" name="ime">
       </label><br>
  <label>Prezime:<br>
        <input type="text" name="prezime">
       </label><br>
        <label>Rođen:<br>
       <input type="text" name="rodjen">
       </label><br>
        <label>Mjesto:<br>
       <input type="text" name="mjesto">
       </label><br>
  <label>Pozicija:<br>
       <input type="text" name="pozicija">
       </label><br>
  <input type="submit" name="insert" value="Insert"><br>
  
</form>
</div><br>
<div id="poruka">
<?php
// da li su parametri poslani,da li je poslat parametar POST
   if(isset($_POST['insert'])){
   //provjeriti da li su svi parametri poslati

       if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['rodjen']) && isset($_POST['mjesto']) && isset($_POST['pozicija'])){
            if(!empty($_POST['ime']) && !empty($_POST['prezime']) && !empty($_POST['rodjen']) && !empty($_POST['mjesto']) && !empty($_POST['pozicija'])){
            //pripremanje promjenjivih
                  $ime= trim($_POST['ime']);
                   $prezime= trim($_POST['prezime']);
                    $rodjen= trim($_POST['rodjen']);
                     $mjesto= trim($_POST['mjesto']);
                      $pozicija= trim($_POST['pozicija']);

               require 'inc/connection.php';

                      $ime = mysqli_real_escape_string($conn, $ime);
                      $prezime = mysqli_real_escape_string($conn, $prezime);
                      $rodjen = mysqli_real_escape_string($conn, $rodjen);
                      $mjesto = mysqli_real_escape_string($conn, $mjesto);
                      $pozicija = mysqli_real_escape_string($conn, $pozicija);
                      //upit ka bazi
         $query ="INSERT INTO radnici (ime, prezime, rodjen, mjesto, pozicija) VALUES('{$ime}','{$prezime}','{$rodjen}','{$mjesto}','{$pozicija}')";
         if(mysqli_query($conn, $query) === TRUE){
            echo "Novi radnik unešen!";
            }else{
            echo "Greška u unosu!";
            }
            }else{
                 echo "Svako polje mora biti ispunjeno!";
            }
       }else{
             echo "Sva polja moraju biti poslata!";
       }

   }
   

?>
     
           
</div>


</body>
</html>