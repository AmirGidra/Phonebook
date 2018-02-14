<?php
print_r($_GET);
if (isset($_GET['btn_delete'])) {
	require 'connection.php';
	$query = "DELETE FROM radnici WHERE ID = {$_GET['ID']}";
	mysqli_query($conn,$query);
	header("Location: ../remove.php");
}



?>