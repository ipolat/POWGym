<?php
 include 'partials/_header.php';
include "connection.php";


$username=$passwordd=$email=$phone=$adress=""; 

if (!empty($_POST)) {
    

    $username = $_POST['username'];
    $passwordd = $_POST['passwordd'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adress = $_POST['adress'];
        }
        

$query="INSERT INTO uye(username,passwordd,email,phone,adress) VALUES ('$username','$passwordd','$email','$phone','$adress')";
$sonuc= mysqli_query($baglanti,$query);
?>


<html>
   
<section class="contact_section " id="uye">
     <div class="container-fluid">
          <div class="row">
          <div class="col-md-6 px-0">
         <div class="img-box">
          <img src="images/contact-img.jpg" alt="">
          </div>
          </div>
          <div class="col-lg-5 col-md-6">
          <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2">
          <div class="heading_container">
          <h2>
          Üye olun
          </h2>
         </div>
          <form action="uye3.php" method="post">  
          <div>
         <input type="text" name="username" placeholder="Tam isim" />
         </div>
        
          <div>
          <input type="email" name="email" placeholder="Email" />
          </div>
  
          <div>
          <input type="password" name="passwordd" placeholder="Şifre" />
          </div>

          <div class="d-flex ">
          <button>
          Giriş Yap
          </button>
        </form>
          </div>
          </div>
            </div>
            </div>
            </div>
            </section>
           <!-- üye ol end-->
</html>


