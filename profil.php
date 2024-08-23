<?php 
include "connection.php";

$sql="SELECT * FROM uye";
$goster=mysqli_query($baglanti,$sql);
while ($row =mysqli_fetch_assoc(mysqli_query($baglanti,$sql)));
    {echo $row['id']." ".$row['username']." ".$row['email']; "<br>";  }

$edit="UPDATE uye SET username='$username',passwordd='$passwordd',email='$email',phone='$phone',adress='$adress' WHERE id='$id')"
$editle=mysqli_query($baglanti,$edit);

    ?>

