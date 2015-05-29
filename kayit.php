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
 
 
 $sql = "SELECT id, firstname, lastname FROM kayit";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
 	// output data of each row
 	while($row = $result->fetch_assoc()) {
 		echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
 	}
 } else {
 	echo "0 results";
 }
 $conn->close();
 ?>
  





?>
