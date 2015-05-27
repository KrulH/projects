<?php
	$urunadi = $_POST['urunadi'];
	$urunadet = $_POST['adet'];
	$urunfiyat = $_POST['fiyat'];

	$test = array($urunadet, $urunfiyat);
	
	if (!is_numeric($urunadet) || empty($urunadet)) {
		echo "Adet bolumunu dogru giriniz\n"; 
		die();
	}

	if (!is_numeric($urunfiyat) || empty($urunfiyat)) {
		echo "Fiyat sayi olmali.\n";
		die();
	}

	if(empty($urunadi)){
		echo "urun adini doldurunuz"; 
		die();
	}

	$total = $urunadet * $urunfiyat;

	$fatura =  "urun adi " . $urunadi . " urun adeti " . $urunadet .
		" urun fiyati " . $urunfiyat . " tutari " . $total . "\n" ;

	$file = file_put_contents('liste.txt', $fatura);

	if($file){
		print "fatura eklendi.";
	} else {
		print "fatura eklenmedi.";	
	}
?>