<?php
include 'db.php';
	
	$owners_id = $_POST['owners_id'];
	$prev = $_POST['prev'];
	$pres = $_POST['pres'];
	$totalcun = $pres - $prev;
	$price = 10;
	$pricetotal = $totalcun * $price;
	$date=$_POST['date'] ;
	

	mysql_query("INSERT INTO  bill (owners_id,prev,pres,price,date) 
		 VALUES ('$owners_id','$prev','$pres','$price','$date')"); 
		 
	mysql_query("UPDATE tempo_bill SET Prev = '$pres' where id ='$owners_id'");
				
				echo '<script>alert("success")</script>';
				echo '<script>windows: location="bill.php"</script>';

	