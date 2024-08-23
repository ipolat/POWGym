<?php
include "connection.php";
$textt=$namee=$eposta=""; 
if (!empty($_POST)) {
    
$namee = $_POST['namee'];
$textt=$_POST['textt'];
$eposta=$_POST['eposta'];
}

$queryy="INSERT INTO mesaj(namee,eposta,textt) VALUES ('$namee','$eposta','$textt')";
$sonuc= mysqli_query($baglanti,$queryy);
echo $sonuc;

if (!empty($_POST))
{
    header("location: index.php");  

}

?>
