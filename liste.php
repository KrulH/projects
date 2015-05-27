<?php
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

	$test = array($urunadet, $urunfiyat);
	
	validate_numaric('urun adedi', $urunadet);
	validate_numaric('urun fiyati', $urunfiyat);	

	if(empty($urunadi)){
		echo "urun adini doldurunuz"; 
		die();
	}

	$total = $urunadet * $urunfiyat;

	$fatura =  "urun adi " . $urunadi . " urun adeti " . $urunadet .
		" urun fiyati " . $urunfiyat . " tutari " . $total . "\n" ;

	// @TODO ensure that the file exists before trying to insert.
	$file = file_put_contents('liste.txt', $fatura);

	if($file){
		print "fatura eklendi.";
	} else {
		print "fatura eklenmedi.";	
	}
?>