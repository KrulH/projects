<?php


$urunadi = $_POST[urunadi];
$urunadet = $_POST[adet];
$urunfiyat = $_POST[fiyat];


$test = array($urunadet,$urunfiyat);


	if (is_numeric($urunadet)) {}
else {echo "Adet sayi olmali."."\n"; }

if (is_numeric($urunfiyat)) {}
	else {echo "Fiyat sayi olmali."."\n"; }

$total = $urunadet *$urunfiyat;


$fatura =  "urun adi"." ". $urunadi." urun adeti ".$urunadet.
" urun fiyati ".$urunfiyat." tutari ". $total."\n" ;



if (!empty($urunadet) and !empty($urunadi) and !empty($urunfiyat))
{
	
	if (is_numeric($urunadet) and is_numeric($urunadet)) 
	{
		
		$file = file_put_contents('liste.txt',$fatura);
	};
}

else {
	echo "bos alan birakmayin.";
	
}


if($file) print "fatura eklendi.";
else print "fatura eklenmedi.";


		
?>