<?php
include 'sql.php';


//Form post metoduyla gönderilen bilgileri alıp değişkenlere atayalım.
$ad = $_POST['isim'];
$soyad = $_POST['soyisim'];
echo $ad.$soyad;
//Veritabanında bulunan 'defter' isimli tablonun 'defter_isim' ve 'defter_soyisim' alanlarına kayıt edelim.
$kaydet = "INSERT INTO  kayit 
		(id,firstname,lastname) 
		VALUES (NULL, '$ad', '$soyad')";
 
if ($conn->query($kaydet) === TRUE)

 { ECHO "KAYIT edildi";}
 else { echo "error";}
 





?>
