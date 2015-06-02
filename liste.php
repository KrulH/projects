<?php
	include 'sql.php';
	/**
	 * Validates a numeric field
	 * @param string name of the field
	 * @param float the value of the field
	 * @return bool
	 */
	function validate_numaric($name, $value){
		if (!is_numeric($value) || empty($value)) {
			echo $name . " bolumunu dogru giriniz\n";
			// @TODO return false and handle the error in the future  
			die();
		}	
		return true;
	}
	$urunadi = $_POST['urunadi'];
	$urunadet = $_POST['adet'];
	$urunfiyat = $_POST['fiyat'];
	
	
	validate_numaric('urun adedi', $urunadet);
	validate_numaric('urun fiyati', $urunfiyat);	
	
	if(empty($urunadi)){
		echo "urun adini doldurunuz"; 
		die();
	}
	
	$total = $urunadet * $urunfiyat;
	$fatura =  "urun adi " . $urunadi . " urun adeti " . $urunadet .
		" urun fiyati " . $urunfiyat . " tutari " . $total . "\n" ;
	
	$kaydet = "INSERT INTO  fatura
		(id,urunadi, adet, fiyat)
		VALUES (NULL, '$urunadi', '$urunadet', '$urunfiyat')";
	
	if ($conn->query($kaydet) === TRUE){ 
		echo "KAYIT edildi". "<br>";
	}
	
	$sql = "SELECT id, urunadi, adet, fiyat FROM fatura";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["id"]. " - Name: " . $row["urunadi"]." ". $row["adet"]. " " . $row["fiyat"]. "<br>" ;
		}
	} else {
		echo "0 results";
	}
	$conn->close();
?>