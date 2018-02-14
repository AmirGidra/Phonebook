<?php
require 'connection.php' ;
 if (isset($_GET['select'])) {
        if (!empty($_GET['select'])) {
        	$select = trim($_GET['select']);
        	$select = mysqli_real_escape_string($conn, $select);
            $query = "SELECT * FROM radnici WHERE ime LIKE '%{$select}%' OR prezime LIKE '%{$select}%'";
            $result = mysqli_query($conn, $query);
              if (mysqli_num_rows($result) > 0) {
              	   while ($row = mysqli_fetch_assoc($result)) {
              	   	?>
                     <br>
                     <div id="rezultat">
                        <p><strong>Ime i Prezime:</strong><?php echo $row['ime'] . " " . $row['prezime'];?></p>
                        <p><strong>Datum rođenja i mjesto:</strong><?php echo $row['mjesto'] . " ". $row['rodjen'];?></p>
                        <p><strong>Pozicija:</strong><?php echo $row['pozicija'];?></p>
                     </div><br>
                     

              	   	<?php
              	   }
              }else{
              	echo 'Nema rezultata.';
              }
        }else{
        	echo 'Polje pretrage je prazno!';
        }
 }




?> 