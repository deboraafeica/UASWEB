<?php
	$conn = mysqli_connect('localhost', 'id20906912_root', 'Abic@nt1k', 'id20906912_pet');
	
	if($conn === false) {
		die("Error: " . mysqli_connect_error());
	}
?>