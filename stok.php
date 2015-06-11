<?php

  include 'sql.php';

  
  
  
  
//   $sql = mysql_query("SELECT invoice.unvan,tablo.urun_ad FROM invoice,tablo
// 	where invoice.i_id=tablo.i_id");

//   while ($data = mysql_fetch_array($sql)) {
  	
//   	echo "$data[2]"
//   	;
//   }
  
  
  
  
  $sql = "SELECT invoice.*,tablo.* FROM invoice,tablo
  		where invoice.i_id=tablo.i_id";
 
  $result = $conn->query($sql);
  
  
  
  
  
  	while($row = $result->fetch_assoc()) {
  		echo "fatura no:". $row["i_id"]." " . $row["unvan"].
  		 " " . $row["Address"]. " ". $row["urun_ad"].
  		 " ". $row["urun_adet"]." " . $row["urun_fiyat"]. " " . " " . "<br>"  
  				 ;
  	 }

  	 $total = "select (urun_adet*urun_fiyat) from tablo";
  	
  	 
  	 $sonuc = $conn->query($total);
  	 while($satir = $sonuc->fetch_array()) {
  	 	
  	 	echo $satir[0]."<br>";
  	 }
  	 
  	
  	 
?>