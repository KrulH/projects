<?php
  include 'sql.php';


  $sql = "SELECT urun_id, urun_ad FROM urun";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
  		echo $row["urun_id"]." " . $row["urun_ad"]. " " . "<br>"  
  				 ;
  	}
  } else {
  	echo "0 results";
  }
?>