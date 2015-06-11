<?php

  include 'sql.php';
  
  
  $sql = "SELECT invoice.*,tablo.* FROM invoice,tablo
  		where invoice.i_id=tablo.i_id";
 
  $result = $conn->query($sql);
  
  
  
  
  
  	while($row = $result->fetch_assoc()) {
  		echo "fatura no:". $row["i_id"]." " ."Musteri Unvani:". $row["unvan"].
  		 " " ."Musteri adresi:". $row["Address"]. " "."aldigi urun adi:". $row["urun_ad"].
  		 " "."urun adedi:". $row["urun_adet"]." " ."urun fiyati:". $row["urun_fiyat"]. " "."urun tutari:".$row["urun_adet"]*$row["urun_fiyat"]. "<br>"  
  				 ;
  	 }

  	 
  	
  	 
?>