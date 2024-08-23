<?php
include "connection.php";
$textt=$namee=$eposta=""; 
if (!empty($_POST)) {
    
$urun = $_POST['urun'];
$adet=$_POST['adet'];
$tur=$_POST['tur'];
}

$queryy="INSERT INTO urun(urun,adet,tur) VALUES ('$urun','$adet','$tur')";
$sonuc= mysqli_query($baglanti,$queryy);
echo $sonuc;
header("location: urun3.php")
?>